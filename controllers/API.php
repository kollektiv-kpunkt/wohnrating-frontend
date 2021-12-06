<?php
require __DIR__ . "/../config/config.inc.php";
require_once __DIR__ . "/../functions.php";

class API {
    private $access_token;
    public $base_url;
    public $ch;

    public function __construct() {
        global $config;
        $this->access_token = $config["api"]["adminAuth"];
        $this->base_url = $config["api"]["baseurl"];
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . $this->access_token,
            "Content-Type:application/json"
        ));
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($this->ch === false){
            die("Error establishing curl");
        }
    }

    public function get_items($collection, $params="") {
        if(!isset($collection)) {
            die("No collection set");
        }
        $url = "{$this->base_url}/items/{$collection}";

        if ($params != ""){
            $i=0;
            foreach($params as $key => $param) {
                if ($i==0) {
                    $prefix = "?";
                } else {
                    $prefix = "&";
                }

                $url .= "{$prefix}{$key}={$param}";
                $i++;
            }
        }

        curl_setopt($this->ch, CURLOPT_URL, $url);

        $response = json_decode(curl_exec($this->ch));
        if (isset($response->errors)) {
            return $response;
        } else {
            return $response->data;
        }

    }

    public function post_item($collection, $payload) {
        if(!isset($collection)) {
            die("No collection set");
        }
        if(!isset($payload)) {
            die("No payload set");
        }

        if (gettype($payload) == "array") {
            $payload = json_encode($payload);
        } else {
            json_decode($payload);
            if (json_last_error() !== JSON_ERROR_NONE) {
                die("Payload malformed");
            }
        }

        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_URL, "{$this->base_url}/items/{$collection}");
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $payload );
        return json_decode(curl_exec($this->ch));
    }
    
    public function update_item($collection, $payload, $id) {
        if(!isset($collection)) {
            die("No collection set");
        }
        if(!isset($id)) {
            die("No item ID set");
        }
        if(!isset($payload)) {
            die("No payload set");
        }

        if (gettype($payload) == "array") {
            $payload = json_encode($payload);
        } else {
            json_decode($payload);
            if (json_last_error() !== JSON_ERROR_NONE) {
                die("Payload malformed");
            }
        }

        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($this->ch, CURLOPT_URL, "{$this->base_url}/items/{$collection}/{$id}");
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $payload );
        return json_decode(curl_exec($this->ch));
    }
}