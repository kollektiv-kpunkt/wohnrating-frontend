<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

include __DIR__ . "/../config/config.inc.php";
include __DIR__ . "/../functions.php";
include __DIR__ . "/../controllers/politician.php";
include __DIR__ . "/../controllers/view.php";

//    Sample Route
//
//    Router::get('/ROUTENAME', function() {
//        $view = new View(
//            "SUBTITLE", || String
//            "PATH", || String
//             "TITLE" || Boolean, String
//        );
//        $view->add_style("STYLESHEET URL");
//        $view->add_script("SCRIPT URL", HEADER || Boolean);
//        $view->render();
//    });


Router::get('/', function() {
    $view = new View(
        "Das Wohnrating für die Zürcher Kommunalwahlen",
        "rating/index",
        false
    );
    $view->add_style("style/ellow.css");
    $view->add_script("style/ellow.js", false);
    $view->render();
});