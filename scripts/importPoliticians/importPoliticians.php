<?php
require_once __DIR__ . "/../../config/config.inc.php";
require_once __DIR__ . "/../../controllers/API.php";
require_once "./politician.php";

global $conn;
$conn = mysqli_connect($config["db"]["host"], $config["db"]["user"], $config["db"]["pw"], $config["db"]["database"]);
$conn -> set_charset("utf8");

$result = $conn->query("SELECT * from `politicians`")->fetch_all();
$politicians = array_values(array_filter($result, function($politician){
    $politician["info"] = unserialize($politician[3]);
    return $politician["info"]->status == "1" || $politician["info"]->status == "2" || $politician["info"]->status === "3" || $politician["info"]->status === "done";
}));

$payload = [
    "date_created" => "", 
    "date_updated" => "", 
    "uuid" => "", 
    "hash" => "", 
    "first_name" => "", 
    "last_name" => "", 
    "email" => "", 
    "job" => "", 
    "jahrgang" => "", 
    "partei" => "", 
    "behorde" => "", 
    "gemeinde" => "", 
    "antworten" => [], 
    "statement" => "", 
    "score" => "", 
    "answered" => "",
    "step" => ""
]; 


function calcScore($answers) {
    /* SETTINGS */
    $pow = 1.25;

    $correctAnswers = [1,4,1,1,1,1,1,1,1];

    $i = -1;
    $totalDiff = 0;
    $answered = 0;
    foreach ($correctAnswers as $correctAnswer) {
        $i++;
        if ($answers[$i] == 5) {
            continue;
        }
        $diff = pow(abs($answers[$i] - $correctAnswer), $pow);
        $totalDiff = $totalDiff + $diff;
        $answered++;
    }

    $maxDiff = (pow(3,$pow) * count($correctAnswers));

    $score = round(1 - ($totalDiff / $maxDiff), 2);

    return $score;
}

foreach ($politicians as $politician):

$politician = unserialize($politician[3]);

if ($politician->name["fname"] == ""){
    continue;
}

$payload["date_created"] = gmdate("Y-m-d\TH:i:s\Z");
$payload["date_updated"] = gmdate("Y-m-d\TH:i:s\Z");
$payload["uuid"] = $politician->uuid;
$payload["hash"] = $politician->hash;
$payload["first_name"] = $politician->name["fname"];
$payload["last_name"] = $politician->name["lname"];
$payload["email"] = $politician->email;
$payload["job"] = $politician->beruf;
$payload["jahrgang"] = $politician->jahrgang;
$payload["behorde"] = $politician->behörde;
$payload["antworten"] = unserialize($politician->antworten);
$payload["statement"] = $politician->statement;
if ($politician->antworten != NULL) {
    $payload["score"] = calcScore(unserialize($politician->antworten));
    $payload["answered"] = count(unserialize($politician->antworten));
}
if ($politician->status == 1) {
    $payload["step"] = "Foto missing, Responses missing, Statement missing";
} else if ($politician->status == 2) {
    $payload["step"] = "Responses missing, Statement missing";
} else if ($politician->status == 3) {
    $payload["step"] = "Statement missing";
} else if ($politician->status == "done") {
    $payload["step"] = "Done";
} else {
    $payload["step"] = "Error";
}

$api = new API;

$params = [
    "filter" => json_encode([
        "gde_nr" => [
            "_eq" => $politician->gemeinde["gde_nr"]
        ]
    ])
];

$payload["gemeinde"] = $api->get_items("Gemeinde", $params)[0]->id;

if (isset($politician->partei["slug"])){
    $parteislug = $politician->partei["slug"];
} else {
    $parteislug = $politician->partei;
}

$params = [
    "filter" => json_encode([
        "slug" => [
            "_eq" => $parteislug
        ]
    ])
];

$payload["partei"] = $api->get_items("Partei", $params)[0]->id;


var_dump($api->post_item("Politician", $payload));
endforeach;