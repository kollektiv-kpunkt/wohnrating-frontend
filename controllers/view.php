<?php
require __DIR__ . "/../config/config.inc.php";
require_once __DIR__ . "/../functions.php";

class View {
    public $title = "Wohnrating.ch";
    public $subtitle;
    public $scripts;
    public $styles;
    public $header = __DIR__ . "/../templates/partials/header.php";
    public $footer = __DIR__ . "/../templates/partials/footer.php";
    public $body;
    public $content;

    public function __construct($subtitle, $body, $title = true) {
        $this->subtitle = $subtitle;
        if (!$title) {
            $this->title = "";
        } else if (gettype($title) == "string") {
            $this->title = $title;
        }
        $this->body = __DIR__  . "/../templates/{$body}.php";
        $this->scripts = [
            "header" => [],
            "footer" => []
        ];
        $this->styles = [];
    }

    // Enqueuing

    public function add_script($url, $header) {
        if ($header) {
            array_push($this->scripts["header"], $url);
        } else {
            array_push($this->scripts["footer"], $url); 
        }
    }
    
    public function add_style($url) {
        array_push($this->styles, $url);
    }

    // Render functions

    public function render_head() {
        foreach ($this->scripts["header"] as $script):
            echo <<<EOD
            <script src="{$script}"></script>
            EOD;
        endforeach;

        foreach ($this->styles as $style):
            echo <<<EOD
            <link rel="stylesheet" href="{$style}">
            EOD;
        endforeach;
    }

    public function render_footer() {
        foreach ($this->scripts["footer"] as $script):
            echo <<<EOD
            <script src="{$script}"></script>
            EOD;
        endforeach;
    }

    public function render_part($name, $args = []) {
        include __DIR__ . "/../templates/template_parts/{$name}.php";
    }

    public function render() {
        ob_start();
        include $this->header;
        include $this->body;
        include $this->footer;
        return ob_get_contents();
    }
}