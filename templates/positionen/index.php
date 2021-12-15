<?php
$this->content = array(
    "intro" => [
        "title" => "Unsere Positionen",
        "lead" => "Gut 70% der Haushalte im Kanton Zürich wohnen zur Miete. In der Stadt Zürich leben ganze 90% der Bevölkerung in Mietwohnungen. Doch die Mieten steigen und steigen und das Angebot an bezahlbaren Wohnungen wir immer kleiner."
    ]
);
$this->render_part("heroine");
$this->render_part("secnav");
?>

<div class="columns3 mt9 mb9 lgcont">
    <div class="column">
        <img src="/img/pages/positionen/graph.png" alt="Grafik, welche die Enwticklung der Mietzinse im Kanton und der Stadt Zürich zeigt." style="width: 100%">
        <p class="text_small mt2"><em>Die Grafik zeigt die Entwicklung der Mietzinse in der Stadt Zürich, indexiert am Stand 2009 (Kanton) resp. 2015 (Stadt).</em></p>
    </div>
    <div class="column">
        <p class="mt0">Von 2009 bis 2020 sind die Angebotsmieten im Kanton Zürich um 22,4 % gestiegen (Quelle: homegate.ch).</p>
        <p>Ein Ende dieser Entwicklung ist nicht abzusehen. Es ist davon auszugehen, dass der Renditedruck im Immobilienmarkt weiter zunimmt.</p>
        <p>Darum braucht es jetzt eine Trendwende in der Bodenpolitik weg von profitorientierten Anbietern hin zu gemeinnützigen Wohnbauträgern und einem verbesserten Schutz der Mieterinnen und Mieter. Den Gemeinden kommt dabei insbesondere in der Bodenpolitik eine wichtige Rolle zu. Hier entscheidet sich wer wo und zu welchen Bedingungen bauen darf.</p>
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

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Die eidgenössische Initiative «Mehr bezahlbare Wohnungen» wollte das Angebot an bezahlbarem Wohnraum erhöhen. Sie forderte unter anderem, dass der Anteil des gemeinnützigen Wohnungsbaus bei neu gebauten Wohnungen gesamtschweizerisch bei mindestens 10% liegt. Und die Kantone und Gemeinden sollten ermächtigt werden, ein Vorkaufsrecht zur Förderung des gemeinnützigen Wohnungsbaus einzuführen Die Initiative wurde zwar mit 57% abgelehnt, aber in alle grösseren Städte wie auch in Zürich und Winterthur fand sich eine Ja-Mehrheit.</p>
    </div>
</div>

<?php
$question = [
    2,
    "Zurzeit sind vier parlamentarische Initiativen im nationalen Parlament hängig: Sie zielen darauf ab, das Mietrecht zu schwächen, indem die Untermiete limitiert, Mietzinserhöhungen vereinfacht oder der Kündigungsschutz geschwächt werden soll. Unterstützen Sie diese Bestrebungen?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Vier parlamentarische Initiativen wollen das Mietrecht angreifen. Es handelt sich bei den Initiativen um zwei Anpassungen im Bereich der Formvorschriften und um einen Angriff auf den Kündigungsschutz und die Untervermietung.</p>
        <p>Eine Wohnungskündigung ist immer ein einschneidendes Ereignis für die Mieterinnen und Mieter. Darum soll der Kündigungsschutz bei Kündigungen wegen Eigenbedarf nicht aufgeweicht werden. Die heutigen Bestimmungen gewähren genügend Spielraum einen dringenden Bedarf auszuweisen.</p>
        <p>Bei der angespannten Situation auf dem Wohnungsmarkt, ist Untervermietung für viele Mieterinnen und Mieter eine Lösung. Bereits heute muss eine Untervermietung offengelegt und bewilligt werden. Das Mietrecht regelt die Untermiete und muss nicht verschärft werden.</p>
    </div>
</div>


<?php
$question = [
    3,
    "Der gemeinnützige Wohnungsbau orientiert sich an der Kostenmiete und wirtschaftet ohne Gewinnabsichten. Erachten Sie in Ihrer Gemeinde ein höherer Anteil an gemeinnützigen Wohnungen für wünschenswert?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Im ganzen Kanton Zürich – nicht nur in der Stadt Zürich - steigen die Mieten kontinuierlich.  Der Druck auf dem Immobilienmarkt ist längst nicht nur in der Agglomeration, sondern auch in den ländlich geprägten Gemeinden angekommen. Der Anteil an gemeinnützigen Wohnungen liegt aktuell bei lediglich 9 % der Wohnung im Kanton Zürich. Damit langfristig bezahlbarer Wohnrauch angeboten werden kann, brauch es eine Trendwende. Wohnungen im Besitz von gemeinnützigen Wohnbauträgern sind dauerhaft der Spekulation entzogen und garantieren einen fairen Mietzins. Genossenschaften verkaufen ihre Wohnungen und Ihr Land nicht. So bleiben die Mieten dauerhaft günstig.</p>
    </div>
</div>

<?php
$question = [
    4,
    "Erachten Sie es als Aufgabe ihrer Gemeinde, darauf zu achten, dass Wohnraum für ältere Menschen, Haushalte mit kleinem Budget, vielen Kindern oder Personen in Ausbildung vorhanden ist?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">In vielen Gemeinden mangelt es an Wohnraum für ältere Menschen, kinderreiche Familien oder Menschen mit wenig Geld. Die Verdrängung dieser Menschen gefährdet den Zusammenhalt und das Gemeinschaftsleben. Müssen Menschen ihre Gemeinde, in der sie aufgewachsen sind, verlassen, weil sie eine Ausbildung beginnen oder eine Familie gründen und keine bezahlbare Wohnung finden, geht viel soziales Kapital verloren. Es fehlen Menschen, die sich in lokalen Vereinen engagieren und soziale Banden werden durchschnitten. Es drohen Schlafdörfer und Schlafstädte, in denen Menschen zwar wohnen, aber nicht leben. Viele Gemeinden haben dieses Problem erkannt und versuchen durch eine aktive Wohnpolitik diesem Verlust an Gemeinwesen entgegenzuwirken.</p>
    </div>
</div>

<?php
$question = [
    5,
    "Soll ihre Gemeinde bei Landverkäufen oder der Einrichtung eines Baurechts prinzipiell gemeinnützige Wohnbauträger berücksichtigen?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Das wenige Land, das Gemeinden heute noch besitzen, wird oft im Baurecht abgegeben. Bei einem Baurecht verpachtet die Gemeinde ein Grundstück für viele Jahrzehnte und erhält im Gegenzug einen Baurechtszins als jährliche Einnahme. Dort wo eine Gemeinde noch Land besitzt, kann sie Einfluss nehmen auf die bauliche Entwicklung und sollte das dementsprechend überlegt tun. Wenn sie das Land an den Meistbietenden verkauft, wird die Mietpreisspirale weiter angetrieben und die Gemeinde verspielt die Chance auf eine aktive Gestaltung ihres Gemeinwesens. Gemeinnützige Wohnbauträger hingegen sind gute Partner für Gemeinden. Sie bieten nicht nur bezahlbaren Wohnraum, sondern schaffen darüber hinaus einen sozialen und ökologischen Mehrwert (siehe auch Frage 7).</p>
    </div>
</div>

<?php
$question = [
    6,
    "Würden Sie sich dafür einsetzen, dass in ihrer Gemeinde Zonen für preisgünstiges Wohnen (nach Artikel 49b des Planungs- und Baugesetzes) errichtet werden? Dadurch können ein Mindestanteil an preisgünstigem Wohnraum und höchstzulässige Mietzinse festgesetzt werden."
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Seit der Revision der kantonalen Verordnung über preisgünstiges Wohnen ist es Gemeinden erlaubt, Zonen für preisgünstiges Wohnen einzurichten. In diesen Zonen können sie bei einer Um- oder Aufzonung verlangen, dass ein gewisser Anteil der Mehrausnutzung dem preisgünstigen Wohnungsbau zugutekommt. Das ist nichts als fair, denn Grundstückbesitzer:innen profitieren ohne eigenes Zutun massiv von einer erhöhten Ausnutzung. Sie sollen deshalb auch in die Pflicht genommen werden und einen Anteil zur Versorgung mit günstigem Wohnraum beisteuern. So kann eine gute Durchmischung des Wohnungsmixes bei Überbauungen erreicht werden. Mit den Zonen für preisgünstiges Wohnen ist für die Gemeinden das entsprechende Steuerungsinstrument geschaffen worden. Jetzt gilt es dieses zu nutzen!</p>
    </div>
</div>

<?php
$question = [
    7,
    "Wohnbaugenossenschaften bringen einen breiten sozialen und gesellschaftlichen Nutzen, indem sie z.B. auf eine gute Belegung der Wohnungen achten, in ökologische Massnahmen investieren und besonders in den Städten zu einer sozialen Durchmischung beitragen und für lebendige Quartiere sorgen. Können Sie dieser Aussage zustimmen?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Genossenschaften stellen meist nicht nur Wohnungen zur Verfügung, sondern schaffen einen Mehrwert für das ganze Quartier oder die Gemeinde.  Die Palette reicht von Siedlungslokalen, gemeinschaftlichen Anlässen und Freizeitangeboten über Nachbarschaftshilfe und Gästezimmer bis zur eigenen Sozialberatung und finanzieller Hilfe in Notlagen.</p>
        <p>In vielen Genossenschaftssiedlungen sind öffentliche Angebote wie Kindertagesstätten, Kindergärten oder Pflegewohnungen untergebracht. Zahlreiche gemeinnützige Bauträger achten auch auf eine gute Nahversorgung mit Lebensmittelläden, Coiffeursalons oder Arztpraxen und bieten Raum für gemeinnützige Vereine und Initiativen aus dem Quartier.</p>
        <p>Wohnbaugenossenschaften können rasch auf gesellschaftliche Veränderungen eingehen und Innovation im Wohnungsmarkt vorantreiben. Wenn es um die Entwicklung von neuartigen Wohnkonzepten oder um neue Wohnformen geht, sind es oft gemeinnützige Bauträger, die eine Vorreiterrolle einnehmen. Vermehrt setzen gemeinnützige Bauträger auch auf Mehrgenerationen-Häuser, wo Jung und Alt unter einem Dach wohnen und sich gegenseitig unterstützen. Auch für die Integration von Menschen mit Behinderungen und Personen mit einem Asylhintergrund engagieren sich gemeinnützige Bauträger.</p>
    </div>
</div>

<?php
$question = [
    8,
    "Ist es Aufgabe der öffentlichen Hand Anreize zu schaffen, dass Immobilienbesitzer:innen Sanierungen im bewohnten Zustand vornehmen, so dass die Mieter:innen in den Wohnungen bleiben können, oder ein Rückkehrrecht erhalten, nachdem die Wohnungen saniert oder umgebaut wurden?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">In den Letzten Jahren nahmen Kündigungen wegen Sanierungen sprunghaft zu. Viele davon sind «Renditekündigungen». Häufig wird eine Sanierung als Vorwand genommen, um die Liegenschaft zu entmieten – das heisst allen Mieter:innen zu kündigen und  die Wohnungen nach dem Umbau zu massiv höheren Preisen wieder zu vermieten. In solchen Fällen kann zwar der Anfangsmietzins angefochten werden, aber die bestehenden Mieter:innen können sich in den wenigsten Fällen einen Wiedereinzug leisten.</p>
        <p>Findet eine Renovation hingegen im bewohnten Zustand statt, kann nach dem Umbau genau berechnet werden, welcher Anteil der Sanierungsmassnahmen «wertvermehrend» war und auf den Mietzins überwälzt werden kann. Ein Instrument der Gemeinden gegen Leerkündigungen kann z.B. sein, dass Gelder für energetische Sanierungen an die Auflage gekoppelt werden, dass Umbauten falls möglich im bewohnten Zustand stattfinden müssen.</p>
    </div>
</div>

<?php
$question = [
    9,
    "Braucht es künftig ein «Wohnschutzgesetz», das Mieter:innen vor Leerkündigungen und preistreibenden Renovationen schützt?"
];
$this->render_part("question-break", $question);
?>

<div class="mt6 lgcont">
    <div class="answercontainer">
        <p class="mt0">Die anhaltend hohen und weiterhin steigenden Bodenpreise treiben die Mietzinse in die Höhe. Dazu kommt, dass bei vielen Gebäuden ein Sanierungsbedarf besteht. Diese - auch energetischen - Sanierungen können im bewohnten Zustand und mit massvollen Mietzinsanpassungen vonstattengehen. Viele Wohnbaugenossenschaften zeigen, dass Sanierungen - oder im Ausnahmefall auch ein Ersatzneubau - sozialverträglich gestaltet werden können. Dazu braucht es eine gute Etappierung und eine transparente Kommunikation.</p>
        <p>Doch leider sind Leerkündigungen und massive Mietzinsaufschläge an der Tagesordnung. Aus diesem Grund hat sich der Kanton Basel-Stadt politisch für «Wohnschutz» entschieden. Am 28. November 2021 wurde die Initiative «Ja zum echten Wohnschutz» angenommen. Dadurch werden Mieter:innen vor Leerkündigungen und übermässigen Mietzinserhöhungen geschützt. Neu wird bei Sanierungen, Um- und Neubauten ein Mietzinsdeckel für einen Grossteil der Basler Mietwohnungen verlangt, wenn die Leerstandsquote unter 1.5 Prozent liegt.</p>
    </div>
</div>

<?php
$this->render_part("footer");
?>