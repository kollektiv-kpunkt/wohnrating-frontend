<?php
$this->content = array(
    "intro" => [
        "title" => "Wohnrating",
        "lead" => "Wir haben die Kandidat:innen für die Kommunalwahlen nach ihren Meinungen zum Thema Wohn- und Bodenpolitik gefragt. Hier finden Sie die Ergebnisse."
    ]
);
$this->render_part("heroine");

$this->render_part("secnav");

$this->add_script("/js/elements/questionaire.js", false);
?>

<div class="smcont" id="questionaire-container">
    <h2 class="mt7 fcdark">Ihr Wohnrating</h2>
    <p class="mt4">Möchten Sie herausfinden, welche Kandidat:innen in Ihrer Gemeinden am besten zu Ihnen passen? Dann beantworten Sie unsere 9 Fragen und erfahren Sie, welche Kandidat:innen am ehesten mit Ihnen übereinstimmen!</p>
    <p class="text_small"><i>Füllen Sie bestenfalls alle Fragen aus. Nicht beantwortete Fragen können Ihr Ergebnis verzerren.</i></p>
    <div id="step1">
        <?php
        $this->render_part("questionaire/part1");
        ?>
    </div>
    <div id="step2">
        <?php
        $this->render_part("questionaire/part2");
        ?>
    </div>
</div>

<div id="kandigrid-container" class="show lgcont">
    
</div>

<?php
$this->render_part("footer");
?>