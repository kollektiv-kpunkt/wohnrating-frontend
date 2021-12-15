<?php
$this->content = array(
    "intro" => [
        "title" => "Wohnrating",
        "lead" => "Wir haben die Kandidat:innen für die Kommunalwahlen nach ihren Meinungen zum Thema Wohn- und Bodenpolitik gefragt. Hier finden Sie die Ergebnisse."
    ]
);
$this->render_part("heroine");

$this->render_part("secnav");
?>


<div class="columns3 mt9 lgcont">
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
        <h2 class="fcdark">Über den Mieter:innenverband MV</h2>
        <div class="columns3 mt5">
            <div class="column">
                <p class="mt0"><b>Der MV Zürich macht sich stark für alle Mieter:innen. Er bietet kompetente Unterstützung bei allen rechtlichen Problemen setzt sich für ein starkes Mietrecht und einen wirksamen Wohnschutz ein.</b></p>
                <h4>Kompetente Unterstützung</h4>
                <p>Unsere Rechtsberater: innen helfen Ihnen bei allen Fragen rund ums Mietrecht. Haben Sie eine Kündigung bekommen oder funktioniert ihre Heizung nicht richtig? Per Mail, Telefon oder in einem persönlichen Gespräch vor Ort bekommen Sie Unterstützung. Für Wohnungsübergaben oder Mängelberatungen kommen unsere Fachpersonen auch zu Ihnen nach Hause.</p>
            </div>
            <div class="column">
                <h4>Starke Lobby</h4>
                <p>Mit seinen über 50'000 Mitgliedern setzt sich der MV Zürich für einen wirksamen Mieterinnen- und Mieterschutz ein. Er fordert faire Mieten, einen wirksamen Kündigungsschutz und mehr bezahlbaren Wohnraum.</p>
            </div>
            <div class="column placeholder"></div>
        </div>
        <h2 class="mt8 fcdark">Über die Wohnbaugenossenschaft WBG</h2>
        <div class="columns3 mt5">
            <div class="column">
                <p class="mt0">Wohnbaugenossenschaften Zürich vertritt 260 Genossenschaften, Stiftungen und gemeinnützige Aktiengesellschaften. Sie besitzen rund 69'000 Wohnungen und Gewerberäumen und engagieren sich für langfristig günstigen Wohnraum und für umfassende Nachhaltigkeit.</p>
                <p>Die Wohnungen unserer Mitglieder sind dank Kostenmiete rund 25 % günstiger als nicht-gemeinnützige Wohnungen. Unsere Mitglieder setzen aber auch beim Bauen architektonische Massstäbe, achten auf sozial verträgliche Verdichtung der Quartiere und ergänzen diese durch Krippen, Gewerbe- und Gemeinschaftsräume und -plätze. </p>
            </div>
            <div class="column">
                <p class="mt0">Der Regionalverband Zürich unterstützt seine Mitglieder mit einer Reihe von Veranstaltungen, sammelt und erarbeitet Branchen-Know-how und bietet Dienstleistungen wie der Vermittlung von Land, Liegenschaften und Kontakten. Darüber hinaus vertritt Wohnbaugenossenschaften Zürich die Anliegen seiner Mitglieder in der Öffentlichkeit und auf politischer Ebene.</p>
            </div>
            <div class="column placeholder"></div>
        </div>
        <h2 class="mt8 fcdark">Auswertung Wohnrating</h2>
        <div class="columns3 mt5">
            <div class="column">
                <p class="mt0">Bei allen 9 Fragen konnte mit den Antwortmöglichkeiten Ja, eher Ja, eher Nein und Nein geantwortet werden. Die Positionen von WBG Winterthur und Zürich und des MV Zürich finden Sie <a href="/hintergrund">hier.</a></p>
                <h4>Berechnungsgrundlage:</h4>
                <p>Für übereinstimmende Antworten wurden 6 Punkte vergeben.<br>
                Für eher Ja resp. eher Nein, wenn unsere Position gleichlautete, wurden 4 Punkte vergeben.<br>
                Für eher Ja resp. eher Nein, wenn unsere Position konträr war, wurde 1 Punkt vergeben.</p>
                <p>100% Übereinstimmung gab es für 54 Punkte.</br>
                0% Übereinstimmung bei 0 Punkten.</p>
            </div>
            <div class="column placeholder">
            </div>
            <div class="column placeholder"></div>
        </div>
    </div>
</div>

<?php
$this->render_part("footer");
?>