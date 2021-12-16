<?php
$uuid = $_GET["uuid"];
$api = new API();
$filter = [
    "uuid" => [
        "_eq" => $uuid
    ]
];

$params = [
    "filter" => json_encode($filter)
];

$politician = $api->get_items("Politician", $params)[0];

$filter = [
    "ID" => [
        "_eq" => $politician->partei
    ]
];

$params = [
    "filter" => json_encode($filter)
];

$partei = $api->get_items("Partei", $params)[0];

function polarToCartesian($cx, $cy, $radius, $deg) {
    $rad = ($deg - 90) * pi() / 180.0;
    return [
        "x" => $cx + ($radius * cos($rad)),
        "y" => $cy + ($radius * sin($rad)),
    ];
}

function describeArc($score){
    if ($score == 1) {
        $score = 0.9999999;
    }
    $endAngle = $score * 360;
    $start = polarToCartesian(52, 52, 50, $endAngle);
    $end = polarToCartesian(52, 52, 50, 0);

    $largeArcFlag = ($endAngle - 0 <= 180) ? 0 : 1;
    
    return join(" ", ["M", $start["x"], $start["y"], "A", 50, 50, 0, $largeArcFlag, 0, $end["x"], $end["y"]]);
}

$image = array_values(array_filter(scandir(__DIR__ . "/../../public/kandis"), function($file) use($politician) {
    return strpos($file, $politician->hash);
}));

if(isset($image[0])) {
    $image = $image[0];
} else {
    $image = "placeholder.png";
}

?>

<div id="testimonial" style="--hue: <?= pow($politician->score, 3) * 120 ?>">
    <div id="testimonial-container">
        <div id="quote-container">
            <p id="quote" class="mt0 mb3">
                <?= $politician->statement ?>
                <span class="guillemait g1">«</span>
            </p>
        </div>
        <div id="img-container">
            <div id="img-inner">
                <div id="testi-img">
                    <img src="/kandis/<?= $image ?>">
                    <svg class="percentage-ring" viewBox="0 0 104 104">
                        <path class="arc" d="<?= describeArc($politician->score) ?>"/>
                    </svg>
                </div>
            </div>
            <div id="testi-content">
                <p id="name" class="mt0"><b id="name"><?= ucfirst($politician->first_name) ?> <?= ucfirst($politician->last_name) ?></b><br><?= $politician->job ?>, <?= $politician->jahrgang ?>, <?= $partei->shortname ?><br>Wohnrating-Score: <b id="score"><?= $politician->score * 100 ?>%</b></p>
            </div>
        </div>
        <div id="domain">wohnrating.ch</b></div>
    </div>
</div>