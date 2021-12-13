<?php
$this->add_script("/lib/select2/select2.min.js", false);
$this->add_script("/js/elements/karte.js", false);
?>
<div class="lgcont mt7">
    <select class="select-gemeinde" name="gemeinde">
        <option></option>
        <option value="131">Adliswil</option>
        <option value="53">Bülach</option>
        <option value="243">Dietikon</option>
        <option value="191">Dübendorf</option>
        <option value="296">Illnau-Effretikon</option>
        <option value="62">Kloten</option>
        <option value="66">Opfikon</option>
        <option value="247">Schlieren</option>
        <option value="198">Uster</option>
        <option value="293">Wädenswil</option>
        <option value="121">Wetzikon</option>
        <option value="230">Winterthur</option>
        <option value="2610001u2">Zürich Kreise 1 und 2</option>
        <option value="2610003">Zürich Kreis 3</option>
        <option value="2610004u5">Zürich Kreise 4 und 5</option>
        <option value="2610006">Zürich Kreis 6</option>
        <option value="2610007u8">Zürich Kreise 7 und 8</option>
        <option value="2610009">Zürich Kreis 9</option>
        <option value="26100010">Zürich Kreis 10</option>
        <option value="26100011">Zürich Kreis 11</option>
        <option value="26100012">Zürich Kreis 12</option>
    </select>
</div>


<div id="wahlkreise-container">
<?php
echo(file_get_contents(__DIR__ . "/gemeinden/gemeinden_wahlkreise_ZH2.svg"));
?>
</div>