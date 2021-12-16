<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->subtitle ?><?php ($this->title != "") ? print(" - " . $this->title) : "" ?></title>
    <meta name="title" content="<?= $this->subtitle ?><?php ($this->title != "") ? print(" - " . $this->title) : "" ?>">
    <meta name="description" content="Gut 70% der Haushalte im Kanton Zürich wohnen zur Miete. In der Stadt Zürich leben ganze 90% der Bevölkerung in Mietwohnungen. Doch die Mieten steigen und steigen und das Angebot an bezahlbaren Wohnungen wir immer kleiner.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
    <meta property="og:title" content="<?= $this->subtitle ?><?php ($this->title != "") ? print(" - " . $this->title) : "" ?>">
    <meta property="og:description" content="Gut 70% der Haushalte im Kanton Zürich wohnen zur Miete. In der Stadt Zürich leben ganze 90% der Bevölkerung in Mietwohnungen. Doch die Mieten steigen und steigen und das Angebot an bezahlbaren Wohnungen wir immer kleiner.">
    <meta property="og:image" content="/img/OG.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
    <meta property="twitter:title" content="<?= $this->subtitle ?><?php ($this->title != "") ? print(" - " . $this->title) : "" ?>">
    <meta property="twitter:description" content="Gut 70% der Haushalte im Kanton Zürich wohnen zur Miete. In der Stadt Zürich leben ganze 90% der Bevölkerung in Mietwohnungen. Doch die Mieten steigen und steigen und das Angebot an bezahlbaren Wohnungen wir immer kleiner.">
    <meta property="twitter:image" content="/img/OG.png">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#963030">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#f6f6f6">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#f6f6f6">

    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="/style/style.css">

    <script src="/lib/jquery.min.js"></script>

    <?php
    $this->add_style("/lib/glowCookies/glowCookies.min.css");
    $this->render_head();
    ?>

</head>

<body>
    <div id="main-content">