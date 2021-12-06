<?php
header("Content-type: application/json");

$api = new API();

global $empfehlung;
$empfehlung = $api->get_items("Wahlempfehlung/{$id}", "");


$payload = [ 
    "first_name" => $_POST["fname"], 
    "last_name" => $_POST["lname"],
    "email" => $_POST["email"],
    "gemeinde" => "",
    "Optin" => (isset($_POST["optin"])) ? 1 : 0,
    "empfehlung_GR" => [],
    "empfehlung_SR" => []
]; 

$params = [
    "filter" => json_encode([
        "gde_nr" => [
            "_eq" => $_POST["gemeinde"]
        ]
    ])
];

$payload["gemeinde"] = $api->get_items("Gemeinde", $params)[0]->id;


function calcScore($answers) {

    global $empfehlung;

    $correctAnswers = $empfehlung->antworten;

    $i = -1;
    $totalScore = 0;
    $answered = 0;
    foreach ($correctAnswers as $correctAnswer) {
        $i++;
        if ($answers[$i] == 5) {
            continue;
        }
        $diff = abs($answers[$i] - $correctAnswer);
		switch ($diff) {
			case 0:
				$score = 6;
				break;
			case 1:
				$score = 4;
				break;
			case 2:
				$score = 1;
				break;
			case 3:
				$score = 0;
				break;
            case 4:
                $score = 0;
				break;
		}
        $totalScore = $totalScore + $score;
        $answered++;
    }

    $maxScore = count($correctAnswers) * 6;

    $score = round(($totalScore / $maxScore), 2);

    return $score;
}

/* GR */

$filter = [
    "gemeinde" => [
        "gde_nr" => [
            "_eq" => $_POST["gemeinde"]
        ]
    ],
    "behorde" => [
        "_eq" => "gr"
    ],
    "step" => [
        "_eq" => "done"
    ]
];


$params = [
    "filter" => json_encode($filter)
];

$grs = $api->get_items("Politician", $params);


$grlisting = [];

foreach ($grs as $gr) {
    $score = calcScore($gr->antworten);

    $grlisting[$gr->id] = $score;
}

arsort($grlisting);

$i = 0;
foreach ($grlisting as $key => $value) {
    $grempfehlung[$i] = $key;
    $i++;
}

$payload["empfehlung_GR"] = $grempfehlung;

/* SR */

if (strpos($_POST["gemeinde"], "261") !== false) {
    $filter = [
        "gemeinde" => [
            "gde_nr" => [
                "_eq" => 261
            ]
        ],
        "behorde" => [
            "_eq" => "sr"
        ],
        "step" => [
            "_eq" => "done"
        ]
    ];    
} else {
    $filter = [
        "gemeinde" => [
            "gde_nr" => [
                "_eq" => $_POST["gemeinde"]
            ]
        ],
        "behorde" => [
            "_eq" => "gr"
        ],
        "step" => [
            "_eq" => "done"
        ]
    ];
}


$params = [
    "filter" => json_encode($filter)
];

$srs = $api->get_items("Politician", $params);


$srlisting = [];

foreach ($srs as $sr) {
    $score = calcScore($sr->antworten);

    $srlisting[$sr->id] = $score;
}

arsort($srlisting);

$i = 0;
foreach ($srlisting as $key => $value) {
    $srempfehlung[$i] = $key;
    $i++;
}

$payload["empfehlung_SR"] = $srempfehlung;

$server = $api->update_item("Wahlempfehlung", $payload, $id)->data;

$response = [
    "code" => 200,
    "ID" => $server->id
];

echo(json_encode($response));