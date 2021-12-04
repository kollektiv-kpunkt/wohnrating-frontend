<?php
$this->content = array(
    "intro" => [
        "title" => "Wohnrating",
        "lead" => "Wir haben die Kandidat:innen für die Kommunalwahlen nach ihren Meinungen zum Thema Wohn- und Bodenpolitik gefragt. Hier findest du die Ergebnisse."
    ]
);
$this->render_part("heroine");

$this->render_part("secnav");

$this->render_part("karte/index");
?>

<div id="kandigrid-container" class="show lgcont">
    
</div>

<?php
$this->render_part("footer");
?>