<?php

$questions = [
    [ 
        "text" => 'Frage 1: Haben Sie der eidgenössischen Initiative «Mehr bezahlbare Wohnungen» (Abstimmung vom 9. Februar 2020), die das Ziel verfolgte, das Angebot an preisgünstigem Wohnraum zu erhöhen, zugestimmt?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 2: Zurzeit sind <a href="https://www.parlament.ch/press-releases/Pages/mm-rk-n-2021-09-06.aspx?lang=1031" target="_blank">vier parlamentarische Initiativen</a> im nationalen Parlament hängig: Sie zielen darauf ab, das Mietrecht zu schwächen, indem die Untermiete limitiert, Mietzinserhöhungen vereinfacht oder der Kündigungsschutz geschwächt werden soll. Unterstützen Sie diese Bestrebungen?',
        "correct" => 4
    ],
    [ 
        "text" => 'Frage 3: Der gemeinnützige Wohnungsbau orientiert sich an der Kostenmiete und wirtschaftet ohne Gewinnabsichten. Erachten Sie in Ihrer Gemeinde einen höheren Anteil an gemeinnützigen Wohnungen für wünschenswert?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 4: Erachten Sie es als Aufgabe ihrer Gemeinde, dafür zu sorgen, dass Wohnraum für ältere Menschen, Haushalte mit kleinem Budget, vielen Kindern oder Personen in Ausbildung vorhanden ist?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 5: Soll ihre Gemeinde bei Landverkäufen oder der Einrichtung eines Baurechts prinzipiell gemeinnützige Wohnbauträger berücksichtigen?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 6: Würden Sie sich dafür einsetzen, dass in ihrer Gemeinde Zonen für preisgünstiges Wohnen (nach Artikel 49b des Planungs- und Baugesetzes) errichtet werden? Dadurch können ein Mindestanteil an preisgünstigem Wohnraum und höchstzulässige Mietzinse festgesetzt werden.',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 7: Wohnbaugenossenschaften bringen einen breiten sozialen und gesellschaftlichen Nutzen, indem sie z.B. auf eine gute Belegung der Wohnungen achten, in ökologische Massnahmen investieren und besonders in den Städten zu einer sozialen Durchmischung beitragen und für lebendige Quartiere sorgen. Können Sie dieser Aussage zustimmen?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 8: Ist es Aufgabe der öffentlichen Hand Anreize zu schaffen, dass Immobilienbesitzer:innen Sanierungen im bewohnten Zustand vornehmen, so dass die Mieter:innen in den Wohnungen bleiben können, oder ein Rückkehrrecht erhalten, nachdem die Wohnungen saniert oder umgebaut wurden?',
        "correct" => 1
    ],
    [ 
        "text" => 'Frage 9: Braucht es künftig ein «Wohnschutzgesetz», das Mieter:innen vor Leerkündigungen und preistreibenden Renovationen schützt?',
        "correct" => 1
    ]
];

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

$api = new API;

if ($organ == "sr" && strpos($gemeinde, "261") !== false) {
    $filter = [
        "gemeinde" => [
            "gde_nr" => [
                "_eq" => 261
            ]
        ],
        "behorde" => [
            "_eq" => $organ
        ],
        "step" => [
            "_eq" => "done"
        ]
    ];
} else {
    $filter = [
        "gemeinde" => [
            "gde_nr" => [
                "_eq" => $gemeinde
            ]
        ],
        "behorde" => [
            "_eq" => $organ
        ],
        "step" => [
            "_eq" => "done"
        ]
    ];
}


$params = [
    "filter" => json_encode($filter),
    "sort" => $sort
];

$politicians = $api->get_items("Politician", $params);

$filter = [
    "gde_nr" => [
        "_eq" => $gemeinde
    ]
];

$params = [
    "filter" => json_encode($filter)
];

$gemeinde = $api->get_items("Gemeinde", $params)[0];

switch($organ):
    case "sr":
        $behorde = "Stadtrat/Exekutive";
        break;
    case "gr":
        $behorde = "Gemeinderat";
        break;
endswitch;

?>

<h2 class="fcdark">Kandidat:innen in <?= $gemeinde->gde_name ?></h2>
<div id="kandigrid-filters" class="mt4 mb8">
    <div id="sorting-filters">
        <span id="score" data-direction="down" data-sort-key="-score" class="kandigrid-filter sorting-filter active">Score</span>
        <span id="az" data-direction="up" data-sort-key="last_name" class="kandigrid-filter sorting-filter">Nachname</span>
    </div>
    <div id="organ-filters">
        <span id="gr" class="kandigrid-filter organ-filter active">Gemeinderat</span>
        <span id="sr" class="kandigrid-filter organ-filter">Stadtrat / Exekutive</span>
    </div>
</div>
<?php
if (count($politicians) == 0): ?>
<div id="ajax-container">
    <div id="kandigrid">
        <i>Leider haben keine Kandidat:innen aus <?= $gemeinde->gde_name ?> an unserem Wohnrating teilgenommen!</i>
    </div>
</div>
<?php
exit;
endif;
?>
<div id="ajax-container">
    <div id="kandigrid" class="mt5">
        <?php
        foreach($politicians as $politician):
            $filter = [
                "ID" => [
                    "_eq" => $politician->partei
                ]
            ];
            
            $params = [
                "filter" => json_encode($filter)
            ];
            
            $partei = $api->get_items("Partei", $params)[0];
    
            $image = array_values(array_filter(scandir(__DIR__ . "/../public/kandis"), function($file) use($politician) {
                return strpos($file, $politician->hash);
            }));
    
            if(isset($image[0])) {
                $image = $image[0];
            }

            if ($politician->statement !== "") {
                $shareable = true;
            } else {
                $shareable = false;
            }
    
        ?>
        <div class="kandi" style="--hue: <?= pow($politician->score, 3) * 120 ?>" id="<?= $politician->uuid ?>">
            <div class="kandi-teaser">
                <svg class="percentage-ring" viewBox="0 0 104 104">
                    <path class="arc" d="<?= describeArc($politician->score) ?>"/>
                </svg>
                <img src="/public/kandis/<?=$image ?>" alt="<?= ucfirst($politician->first_name) ?> <?= ucfirst($politician->last_name) ?>, Kandidat:in <?= $behorde ?> <?= $gemeinde->gde_name ?>">
                <div class="kandi-teaser-overlay"></div>
            </div>
            <h5 class="fcdark mt4 mb1"><?= ucfirst($politician->first_name) ?> <?= ucfirst($politician->last_name) ?></h5>
            <p class="mt0 mb0">Score: <b><?= $politician->score * 100 ?>%</b></p>
            <div class="kandi-moreinfo-container mt5 mb5 bgdark fcwhite">
                <div class="kandi-moreinfo-inner lgcont pt7 pb7">
                    <h1 class="kandi-info-name mb5 fs5"><?= ucfirst($politician->first_name) ?> <?= ucfirst($politician->last_name) ?></h1>
                    <p class="kandi-info-details mt0 mb6<?php ($shareable) ? print " shareable" : print "" ?>"><?= $politician->job ?>, <?= $politician->jahrgang ?>, <?= $partei->shortname ?></p>
                    <?php
                    if ($politician->statement): 
                    ?>
                    <p class="kandi-info-quote fs2 mb7">«<?= trim($politician->statement) ?>»</p>
                    <?php
                    endif;
                    ?>
                    <div class="kandi-info-rating-details">
                        <h4 class="mb5"><?= ucfirst($politician->first_name) ?>s Wohnrating: <span style="color: hsl(var(--hue), 100%, 50%)"><?= $politician->score * 100 ?>%</span></h4>
                        <div class="kandi-info-rating-questions">
                            <?php
                            $i = 0;
                            foreach ($questions as $question): 
                            ?>
                                <div class="question">
                                    <p class="mt0 mb6"><?= $question["text"] ?></p>
                                    <div class="question-answers mt2">
                                        <div class="answer<?php ($question["correct"] == 1) ? print(" correct") : print("") ?><?php ($politician->antworten[$i] == 1) ? print(" selected") : print("") ?>">
                                            <span class="answer-label">Ja</span>
                                            <div class="answer-block"></div>
                                        </div>
                                        <div class="answer<?php ($question["correct"] == 2) ? print(" correct") : print("") ?><?php ($politician->antworten[$i] == 2) ? print(" selected") : print("") ?>">
                                            <span class="answer-label">Eher ja</span>
                                            <div class="answer-block"></div>
                                        </div>
                                        <div class="answer<?php ($question["correct"] == 3) ? print(" correct") : print("") ?><?php ($politician->antworten[$i] == 3) ? print(" selected") : print("") ?>">
                                            <span class="answer-label">Eher nein</span>
                                            <div class="answer-block"></div>
                                        </div>
                                        <div class="answer<?php ($question["correct"] == 4) ? print(" correct") : print("") ?><?php ($politician->antworten[$i] == 4) ? print(" selected") : print("") ?>">
                                            <span class="answer-label">Nein</span>
                                            <div class="answer-block"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            endforeach;
                            ?>
                        </div>
                        <i class="fas fa-times kandi-info-close"></i>
                    </div>
                </div>
            </div>
            <div class="kandi-moreinfo-placeholder"></div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</div>