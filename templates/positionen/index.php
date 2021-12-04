<?php
$this->content = array(
    "intro" => [
        "title" => "Unsere Positionen",
        "lead" => "Mehr als 90 % der Familien im Kanton Zürich können sich den Erwerb von Wohneigentum nicht mehr leisten. Gleichzeitig steigen die Mieten immer weiter und dies nicht nur in den Zentren. Von 2009 bis 2020 sind die Angebotsmieten im Kanton Zürich um 22,4 % gestiegen (Quelle: homegate.ch). Ein Ende dieser Entwicklung ist trotz Coronapandemie nicht in Sicht. Es ist davon auszugehen, dass der Renditedruck im Immobilienmarkt weiter zunimmt."
    ]
);
$this->render_part("heroine");
$this->render_part("secnav");
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <img src="/img/pages/positionen/graph.png" alt="Grafik, welche die Enwticklung der Mietzinse im Kanton und der Stadt Zürich zeigt." style="width: 100%">
        <p class="text_small mt2"><em>Die Grafik zeigt die Entwicklung der Mietzinse in der Stadt Zürich, indexiert am Stand 2009 (Kanton) resp. 2015 (Stadt).</em></p>
    </div>
    <div class="column">
        <p class="mt0">Darum braucht es jetzt eine Trendwende in der Bodenpolitik weg von profitorientierten Anbietern hin zu gemeinnützigen Wohnbauträgern und einem verbesserten Schutz der Mieterinnen und Mieter. Den Gemeinden kommt dabei insbesondere in der Bodenpolitik eine wichtige Rolle zu. Hier entscheidet sich wer wo und zu welchen Bedingungen bauen darf.</p>
    </div>
    <div class="column">
        <p class="mt0">Bei den kommunalen Wahlen im Jahr 2022 haben Sie es in der Hand: Möchten Sie eine Vertretung, die der Mietpreissteigerung weiterhin tatenlos zuschaut oder eine, die sich für mehr bezahlbare Wohnungen einsetzt? Wir haben alle Stadtrats- und Gemeinderatskandidierenden in den 13 Zürcher Parlamentsgemeinden angeschrieben und sie gebeten, 9 Fragen zur aktuellen Wohn- und Mietpolitik zu beantworten. Die Resultate finden Sie hier.</p>
    </div>
</div>

<?php
$question = [
    1,
    "Haben Sie der eidgenössischen Initiative «Mehr bezahlbare Wohnungen» (Abstimmung vom 9. Februar 2020), die das Ziel verfolgte, das Angebot an preisgünstigem Wohnraum zu erhöhen, zu gestimmt?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <p class="mt0">Die eidgenössische Initiative «Mehr bezahlbare Wohnungen» wollte das Angebot an preisgünstigem Wohnraum erhöhen. Sie forderte, dass der Anteil des gemeinnützigen Wohnungsbaus an den neu gebauten Wohnungen gesamtschweizerisch bei mindestens 10 Prozent liegt. Des Weiteren wollte die Initiative die Kantone und Gemeinden ermächtigen, zur Förderung des gemeinnützigen Wohnungsbaus für sich ein Vorkaufsrecht für geeignete Grundstücke einzuführen. </p>
    </div>
    <div class="column">
        <p class="mt0">Zudem soll der Bund den Kantonen und Gemeinden beim Verkauf von Grundstücken des Bundes oder bundesnaher Betriebe ein Vorkaufsrecht einräumen. Die Initiative wurde mit 57 % zu 43 % abgelehnt. Wir bedauern die Ablehnung der Initiative, hätte sie doch eine grosse Chance geboten, den Anteil gemeinnütziger Wohnungen nach Jahrzehnten der Stagnation (aktuell ca 5%) wieder zu erhöhen. Zusätzlich wäre ein Vorkaufsrecht für die Gemeinden und Kantone ein wichtiges Instrument, um einfach Boden zu erwerben und aktiv für bezahlbaren Wohnraum zu sorgen.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    2,
    "Zurzeit sind vier parlamentarische Initiativen im nationalen Parlament hängig: Sie zielen darauf ab, das Mietrecht zu schwächen, indem die Untermiete limitiert, Mietzinserhöhungen vereinfacht oder der Kündigungsschutz geschwächt werden soll. Unterstützen Sie diese Bestrebungen?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <h5 class="mt0">Anfechtung des Anfangsmietzinses</h5>
        <p class="mt2">Diese Anfechtungsmöglichkeit hilft gegen renditehungrige Vermieter, die einen Mieterwechsel missbrauchen, um die Miete massiv aufzuschlagen. Eine Praxis, die in vielen Städten längst Schule gemacht hat. Dank der Möglichkeit der Mietzins-Anfechtung lenken solche Vermieter in Schlichtungsverfahren oft ein und reduzieren den Aufschlag, wenn es ernst wird. Das Instrument der Anfechtung des Anfangsmietzinses wirkt und darf nicht abgeschafft werden.</p>
    </div>
    <div class="column">
        <h5 class="mt0">Erschwerung der Untermiete</h5>
        <p class="mt2">Zudem soll der Bund den Kantonen und Gemeinden beim Verkauf von Grundstücken des Bundes oder bundesnaher Betriebe ein Vorkaufsrecht einräumen. Die Initiative wurde mit 57 % zu 43 % abgelehnt. Wir bedauern die Ablehnung der Initiative, hätte sie doch eine grosse Chance geboten, den Anteil gemeinnütziger Wohnungen nach Jahrzehnten der Stagnation (aktuell ca 5%) wieder zu erhöhen. Zusätzlich wäre ein Vorkaufsrecht für die Gemeinden und Kantone ein wichtiges Instrument, um einfach Boden zu erwerben und aktiv für bezahlbaren Wohnraum zu sorgen.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    3,
    "Der gemeinnützige Wohnungsbau orientiert sich an der Kostenmiete und wirtschaftet ohne Gewinnabsichten. Erachten Sie in Ihrer Gemeinde ein höherer Anteil an gemeinnützigen Wohnungen für wünschenswert?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <p class="mt0">Im ganzen Kanton Zürich – nicht nur in der Stadt Zürich – steigen die Mieten. Seit 2009 um über 22%. Der Druck auf dem Immobilienmarkt ist längst nicht nur in der Agglomeration, sondern auch in den ländlich geprägten Gemeinden angekommen. Gleichzeitig sinkt der Anteil an gemeinnützigen Wohnungen, aktuell sind es lediglich 9 % der Wohnung im Kanton. </p>
    </div>
    <div class="column">
        <p class="mt0">Eine Trendwende ist dringend nötig, denn Wohnungen im Besitz von gemeinnützigen Wohnbauträgern haben nicht nur eine tiefere Miete, sondern sind auch dauerhaft der Spekulation entzogen. Einer Genossenschaft ist es per Statuten verboten, ihre Wohnungen oder ihr Land mit Gewinn zu verkaufen, so bleiben die Mieten dauerhaft günstig.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    4,
    "Erachten Sie es als Aufgabe ihrer Gemeinde, darauf zu achten, dass Wohnraum für ältere Menschen, Haushalte mit kleinem Budget, vielen Kindern oder Personen in Ausbildung vorhanden ist?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <p class="mt0">In vielen Gemeinden mangelt es an Wohnraum für ältere Menschen, kinderreiche Familien oder Menschen mit wenig Geld. Die Verdrängung dieser Menschen gefährdet den Zusammenhalt und das Gemeinschaftsleben. Wenn Menschen ihre Gemeinde, in der sie aufgewachsen sind, verlassen müssen, weil sie eine Ausbildung angefangen haben oder eine Familie gründen wollen, dann geht auch viel Soziales Kapital verloren.</p>
    </div>
    <div class="column">
        <p class="mt0">Dann fehlen Menschen, die sich in lokalen Vereinen engagieren und soziale Banden werden durchschnitten. Es drohen Schlafdörfer und Schlafstädte, in er Menschen zwar wohnen, aber nicht leben. Viele Gemeinden haben dieses Problem erkannt und versuchen durch eine aktive Wohnpolitik diesem Verlust an Gemeinwesen entgegenzuwirken.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    5,
    "Soll ihre Gemeinde bei Landverkäufen oder der Einrichtung eines Baurechts prinzipiell gemeinnützige Wohnbauträger berücksichtigen?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <p class="mt0">Das wenige Land, das Gemeinden heute noch besitzen, wird meist nur noch im Baurecht abgegeben. Bei einem Baurecht verpachtet die Gemeinde ein Grundstück für 60-75 Jahre und erhält im Gegenzug einen Baurechtszins. Dort wo eine Gemeinde noch Land besitzt, kann sie Einfluss nehmen auf die bauliche Entwicklung und sollte das dementsprechend überlegt tun. Wenn sie das Land einfach an den Meistbietenden verhökert, dann treibt sie die Mietpreisspirale weiter an und verspielt ihre Chance auf eine aktive Gestaltung des Gemeinwesens.</p>
    </div>
    <div class="column">
        <p class="mt0">Gemeinnützige Wohnbauträger hingegen sind gute Partner für Gemeinden. Sie bieten nicht nur günstigen Wohnraum, sondern schaffen darüber hinaus einen sozialen und ökologischen Mehrwert (siehe 7).</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    6,
    "Würden Sie sich dafür einsetzen, dass in ihrer Gemeinde Zonen für preisgünstiges Wohnen (nach Artikel 49b des Planungs- und Baugesetzes) errichtet werden? Dadurch können ein Mindestanteil an preisgünstigem Wohnraum und höchstzulässige Mietzinse festgesetzt werden."
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <p class="mt0">Seit der Revision der kantonalen Verordnung über preisgünstiges Wohnen, ist es Gemeinden erlaubt Zonen für preisgünstiges Wohnen einzurichten. In diesen Zonen können sie bei einer Um- oder Aufzonung verlangen, dass ein gewisser Anteil der Mehrausnutzung dem preisgünstigen Wohnungsbau zugutekommt. Das ist nichts als fair, denn Grundstückbesitzer*innen profitieren ohne eigenes Zutun massiv von einer erhöhten Ausnutzung.</p>
    </div>
    <div class="column">
        <p class="mt0">Sie sollen deshalb auch in die Pflicht genommen werden und einen Anteil zur Versorgung mit günstigem Wohnraum beisteuern. Zonen für preisgünstiges Wohnen geben Gemeinden das entsprechende Steuerungsinstrument, jetzt gilt es das zu nutzen!</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    7,
    "Wohnbaugenossenschaften bringen einen breiten sozialen und gesellschaftlichen Nutzen, indem sie z.B. auf eine gute Belegung der Wohnungen achten, in ökologische Massnahmen investieren und besonders in den Städten zu einer sozialen Durchmischung beitragen und für lebendige Quartiere sorgen. Können Sie dieser Aussage zustimmen?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column">
        <h5 class="mt0">Mehr als Wohnen</h5>
        <p class="mt2">Die Genossenschaften stellen nicht nur Wohnungen zur Verfügung, sondern offerieren in der Regel zahlreiche zusätzliche Angebote. Die Palette reicht von Siedlungslokalen, gemeinschaftlichen Anlässen und Freizeitangeboten über Nachbarschaftshilfe und Gästezimmer bis zur eigenen Sozialberatung und finanzieller Hilfe in Notlagen. Interne Sozialdienste und eine ausgeprägte Nachbarschaftshilfe entlasten auch die öffentliche Hand. Gemeinschaftliche Aktivitäten sowie die Möglichkeit, sein Wohnumfeld aktiv mitzugestalten, tragen zu einer hohen Wohn- und Lebensqualität bei.</p>
        <h5 class="mt4">Zivilgesellschaftliches Engagement</h5>
        <p class="mt2">Bei den meisten Wohnbaugenossenschaften gilt: Wer hier wohnt, ist zugleich Mitglied, kann über die Geschäftstätigkeit mitbestimmen und sein eigenes Wohnumfeld aktiv mitgestalten. Gemeinnützige Bauträger fördern das Engagement und das Verantwortungsbewusstsein der Bewohnerinnen und Bewohner. Sie stärken damit die Zivilgesellschaft und tragen zur Teilhabe an der Gesellschaft bei.</p>
    </div>
    <div class="column">
        <h5 class="mt0">Da fürs Quartier</h5>
        <p class="mt2">Von den Angeboten in den Genossenschaftssiedlungen profitieren nicht nur die Bewohner, sondern ganze Stadtteile. In vielen Genossenschaftssiedlungen sind öffentliche Angebote wie Kindertagesstätten, Kindergärten oder Pflegewohnungen untergebracht. Zahlreiche gemeinnützige Bauträger achten auch auf eine gute Nahversorgung mit Lebensmittelläden, Coiffeursalons oder Arztpraxen und bieten Raum für gemeinnützige Vereine und Initiativen aus dem Quartier. Ihre Gemeinschaftsräume stehen auch dem übrigen Quartier zur Verfügung.</p>
        <p class="mt0">Auch in ländlichen Gebieten tragen viele Genossenschaften zu einer lebendigen Dorfgemeinschaft bei, zum Beispiel mit dem Betrieb von Dorfbeizen und Kulturlokalen. Nicht selten sind es Genossenschaften, die historische Gebäude mitten im Dorfzentrum erwerben, sanieren und einer neuen Nutzung zuführen.</p>
    </div>
    <div class="column">
        <h5 class="mt0">Neue Formen des Zusammenlebens</h5>
        <p class="mt2">Durch ihr demokratisches Prinzip können Wohnbaugenossenschaften auf gesellschaftliche Veränderungen eingehen und Innovation im Wohnungsmarkt vorantreiben. Wenn es um die Entwicklung von neuartigen Wohnkonzepten oder um neue Wohnformen geht, sind es oft gemeinnützige Bauträger, die eine Vorreiterrolle einnehmen. Spezielle Wohnungstypen wie Cluster- oder Satellitenwohnungen, wo die Bewohnenden über einen kleinen Privatbereich verfügen und sich grosszügige gemeinsame Wohnräume teilen, geben neue Impulse für das gemeinschaftliche Zusammenleben.</p>
        <p class="mt0">Vermehrt setzen gemeinnützige Bauträger auch auf Mehrgenerationen-Häuser, wo Jung und Alt unter einem Dach wohnen und sich nach Möglichkeit gegenseitig unterstützen. Auch für die Integration von Menschen mit Behinderungen und Personen mit einem Asylhintergrund engagieren sich gemeinnützige Bauträger.</p>
    </div>
</div>

<?php
$question = [
    8,
    "Ist es Aufgabe der öffentlichen Hand Anreize zu schaffen, dass Immobilienbesitzer*innen Sanierungen im bewohnten Zustand vornehmen, so dass die Mieter*innen in den Wohnungen bleiben können, oder ein Rückkehrrecht erhalten, nachdem die Wohnungen saniert oder umgebaut wurden?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column placeholder">
    </div>
    <div class="column">
        <p class="mt0">In den Letzten Jahren nahmen Kündigungen wegen Sanierungen sprunghaft zu. Viele davon sind «Renditekündigungen» und betreffen vor allem Liegenschaften in städtischen Gebieten. Häufig wird eine Sanierung lediglich vorgeschoben, um den Mieter*innen einfacher zu künden. Solche missbräuchlichen Kündigungen sind grundsätzlich anfechtbar, aber der Rechtsweg ist teuer und ungewiss.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$question = [
    9,
    "Braucht es künftig ein «Wohnschutzgesetz», das Mieter*innen vor Leerkündigungen und preistreibenden Renovationen schützt?"
];
$this->render_part("question-break", $question);
?>

<div class="columns3 mt9 lgcont">
    <div class="column placeholder">
    </div>
    <div class="column">
        <p class="mt0">Mieter*innen sind in der Schweiz schlecht geschützt. Renditeorientierte Immobilienfirmen nützen diese Situation aus und vollziehen immer öfters Leerkündigungen um die Miete in die Höhe zu treiben und sich nicht mit Beschwerden der Bewohnerschaft auszusetzen. Dass es auch anders geht, zeigen die Genossenschaften. Sie sanieren wenn möglich nur im Bewohnten Zustand und falls das nicht möglich ist, sorgen sie für einen adäquaten Wohnersatz. Ein Wohnschutzgesetz könnte sich an dieser Praxisorientieren und die erlaubten Mietaufschläge nach Sanierungen gesetzlich begrenzen.</p>
    </div>
    <div class="column placeholder">
    </div>
</div>

<?php
$this->render_part("footer");
?>