<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

include __DIR__ . "/../config/config.inc.php";
include __DIR__ . "/../functions.php";
include __DIR__ . "/../controllers/politician.php";
include __DIR__ . "/../controllers/view.php";
include __DIR__ . "/../controllers/API.php";

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
    $view->add_style("/style/pages/home.css");
    $view->add_style("/style/elements/secnav.css");
    $view->add_style("/style/elements/cta.css");
    $view->render();
});

Router::get('/rating', function() {
    $view = new View(
        "Unser Rating",
        "rating/rating"
    );
    $view->add_style("/lib/select2/select2.min.css");
    $view->add_style("/style/pages/rating.css");
    $view->add_style("/style/elements/secnav.css");
    $view->add_style("/style/elements/kandigrid.css");
    $view->add_script("/js/elements/kandigrid.js", false);
    $view->render();
});

Router::get('/hintergrund', function() {
    $view = new View(
        "Unsere Positionen",
        "positionen/index"
    );
    $view->add_style("/style/elements/secnav.css");
    $view->add_style("/style/pages/positionen.css");
    $view->add_style("/style/elements/question-break.css");
    $view->render();
});


Router::get('/shareimg', function() {
    $view = new View(
        "Share",
        "elements/shareimg"
    );
    $view->add_style("/style/elements/testimonial.css");
    $view->render();
});

Router::get('/test/API', function() {
    header("Content-type: application/json");
    $api = new API;
    $params = [
        "limit" => 5,
        "page" => 1
    ];
    echo($api->get_items("Politician", $params));
});


Router::error(function(Pecee\Http\Request $request, \Exception $exception) {

    switch($exception->getCode()) {
        // Page not found
        case 404:
            echo("Folgt");
            exit;
        // Forbidden
        case 403:
            response()->redirect('/forbidden');
    }
    
});


/* Interfaces */

Router::get('/interface/kandigrid/{gemeinde}/{organ}/{sort}', function($gemeinde, $organ, $sort) {
    include __DIR__ . "/../interfaces/kandigrid.php";
});