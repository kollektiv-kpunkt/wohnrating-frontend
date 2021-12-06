<?php
header("Content-type: application/json");
$api = new API();

$payload = [
    "hash" => $_POST["hash"], 
    "antworten" => $_POST["answers"]
]; 

$server = $api->post_item("Wahlempfehlung", $payload)->data;

$response = [
    "code" => 200,
    "ID" => $server->id
];

echo(json_encode($response));