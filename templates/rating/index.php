<?php
$this->content = array(
    "intro" => [
        "title" => "Unser Rating",
        "lead" => "Wir haben die Kandidat:innen für die Kommunalwahlen nach ihren Meinungen zum Thema Wohn- und Bodenpolitik gefragt. Hier findest du die Ergebnisse."
    ]
);
$this->render_part("heroine");

$this->render_part("secnav");
?>


<h2 class="fcdark lgcont mt9 mb3">Darum gehts</h2>
<div class="columns3 mt3 lgcont">
    <div class="column">
        <h4 class="fcdark">Die Mieten in Zürich explodieren</h4>
        <p class="mt0">Mehr als 90 % der Familien im Kanton Zürich können sich den Erwerb von Wohneigentum nicht mehr leisten. Gleichzeitig steigen die Mieten immer weiter und dies nicht nur in den Zentren. Von 2009 bis 2020 sind die Angebotsmieten im Kanton Zürich um 22,4 % gestiegen (Quelle: homegate.ch). Ein Ende dieser Entwicklung ist trotz Coronapandemie nicht in Sicht. Es ist davon auszugehen, dass der Renditedruck im Immobilienmarkt weiter zunimmt.</p>
    </div>
    <div class="column">
        <h4 class="fcdark">Jetzt braucht es die Trendwende</h4>
        <p class="mt0">Darum braucht es jetzt eine Trendwende in der Bodenpolitik weg von profitorientierten Anbietern hin zu gemeinnützigen Wohnbauträgern und einem verbesserten Schutz der Mieterinnen und Mieter. Den Gemeinden kommt dabei insbesondere in der Bodenpolitik eine wichtige Rolle zu. Hier entscheidet sich wer wo und zu welchen Bedingungen bauen darf.</p>
    </div>
    <div class="column">
        <h4 class="fcdark">Die richtige Vertretung wählen</h4>
        <p class="mt0">Bei den kommunalen Wahlen im Jahr 2022 haben Sie es in der Hand: Möchten Sie eine Vertretung, die der Mietpreissteigerung weiterhin tatenlos zuschaut oder eine, die sich für mehr bezahlbare Wohnungen einsetzt? Wir haben alle Stadtrats- und Gemeinderatskandidierenden in den 13 Zürcher Parlamentsgemeinden angeschrieben und sie gebeten, 9 Fragen zur aktuellen Wohn- und Mietpolitik zu beantworten. Die Resultate finden Sie hier.</p>
    </div>
</div>

<?php
$this->render_part("cta");
?>

<div class="mt9" id="ueber-uns">
    <div id="ueber-uns-inner" class="lgcont">
        <h2 class="fcdark">Über die Wohnbaugenossenschaft WBG</h2>
        <div class="columns3">
            <div class="column">
                <p class="mt0">Lacus volutpat nulla ac scelerisque aliquam dictum. Vestibulum ut quam auctor non nam. Enim integer varius mattis purus phasellus tristique in feugiat nunc. Vitae fermentum id aliquam ipsum tellus. A ac nullam elit senectus fames. Habitant eget congue quis at lacinia libero. Consectetur sit tempor nibh pulvinar sit ipsum fringilla sit. Curabitur sed nunc nullam metus eu.</p>
                <p>Vel feugiat elit, neque commodo lectus placerat dapibus viverra. Sed lectus est elementum morbi rutrum scelerisque neque ut. <strong>Vitae aliquet diam, ac, dolor vestibulum, mi sed vestibulum enim.</strong> Viverra tellus lorem molestie eu risus gravida accumsan. At lectus non semper dolor.</p>
            </div>
            <div class="column">
                <p class="mt0">Lacus volutpat nulla ac scelerisque aliquam dictum. Sestibulum ut quam auctor non nam. Enim integer varius mattis purus phasellus tristique in feugiat nunc. Vitae fermentum id aliquam ipsum tellus. Selenium</p>
                <p><strong>A ac nullam elit senectus fames. Habitant eget congue quis at lacinia libero. Consectetur sit tempor nibh pulvinar sit ipsum fringilla sit. Curabitur sed nunc nullam metus eu.</strong></p>
            </div>
            <div class="column placeholder"></div>
        </div>
        <h2 class="mt6 fcdark">Über den Mieter:innenverband MV</h2>
        <div class="columns3">
            <div class="column">
                <p class="mt0">Lacus volutpat nulla ac scelerisque aliquam dictum. Vestibulum ut quam auctor non nam. Enim integer varius mattis purus phasellus tristique in feugiat nunc. Vitae fermentum id aliquam ipsum tellus. A ac nullam elit senectus fames. Habitant eget congue quis at lacinia libero. Consectetur sit tempor nibh pulvinar sit ipsum fringilla sit. Curabitur sed nunc nullam metus eu.</p>
                <p>Vel feugiat elit, neque commodo lectus placerat dapibus viverra. Sed lectus est elementum morbi rutrum scelerisque neque ut. <strong>Vitae aliquet diam, ac, dolor vestibulum, mi sed vestibulum enim.</strong> Viverra tellus lorem molestie eu risus gravida accumsan. At lectus non semper dolor.</p>
            </div>
            <div class="column">
                <p class="mt0">Lacus volutpat nulla ac scelerisque aliquam dictum. Sestibulum ut quam auctor non nam. Enim integer varius mattis purus phasellus tristique in feugiat nunc. Vitae fermentum id aliquam ipsum tellus. Selenium</p>
                <p><strong>A ac nullam elit senectus fames. Habitant eget congue quis at lacinia libero. Consectetur sit tempor nibh pulvinar sit ipsum fringilla sit. Curabitur sed nunc nullam metus eu.</strong></p>
            </div>
            <div class="column placeholder"></div>
        </div>
    </div>
</div>

<?php
$this->render_part("footer");
?>