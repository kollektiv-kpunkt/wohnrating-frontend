<?php
$this->add_script("/js/elements/secnav.js", false);
?>
<div id="secnav-container" class="bgdark pt3 pb3">
    <div id="secnav-inner">
        <a href="/" class="button bgtrans<?php ($_SERVER["REQUEST_URI"] == "/") ? print(" current") : "" ?>">Darum gehts</a>
        <a href="rating" class="button bgtrans<?php ($_SERVER["REQUEST_URI"] == "/rating") ? print(" current") : "" ?>">Rating</a>
        <a href="wahlempfehlung" class="button<?php ($_SERVER["REQUEST_URI"] == "/wahlempfehlung") ? print(" current") : "" ?> bgtrans">Wahlempfehlung</a>
    </div>
</div>