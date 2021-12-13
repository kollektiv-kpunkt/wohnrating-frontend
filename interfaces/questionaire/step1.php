<?php
header("Content-type: application/json");
$api = new API();

function calcScore($answers) {

    $correctAnswers = [1,4,1,1,1,1,1,1,1];

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
		}
        $totalScore = $totalScore + $score;
        $answered++;
    }

    $maxScore = count($correctAnswers) * 6;

    $score = round(($totalScore / $maxScore), 2);

    return $score;
}

$payload = [
    "hash" => $_POST["hash"], 
    "antworten" => $_POST["answers"],
    "score" => calcScore($_POST["answers"])
]; 

$server = $api->post_item("Wahlempfehlung", $payload)->data;

$response = [
    "code" => 200,
    "ID" => $server->id
];

echo(json_encode($response));