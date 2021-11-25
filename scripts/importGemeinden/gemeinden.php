<?php

/* DEPRECATED */

// global $config;
// global $api;
// require __DIR__ . "/../../config/config.inc.php";
// $file = fopen("gemeinden.csv", "r");

// curl_setopt($api, CURLOPT_POST, 1);
// curl_setopt($api, CURLOPT_URL, "{$config["api"]["baseurl"]}/items/Gemeinde");

// $i = 0;

// while (($line = fgetcsv($file, 0, ",", "'")) !== FALSE) :
//     $payload = array(
//         "gde_name" => $line[2],
//         "gde_nr" => $line[1],
//         "gde_mutation" => $line[9],
//         "gde_parlament" => $line[7],
//         "bez_nr" => $line[4],
//         "bez_name" => $line[3],
//         "kt_id" => $line[5],
//         "kt_name" => $line[6],
//         "plzs" => $line[8],
//         "gde_name_short" => $line[10]
//     );
//     $payload = json_encode($payload);
//     curl_setopt($api, CURLOPT_POSTFIELDS, $payload );
//     $response = curl_exec($api);
//     $i++;
//     echo ("Imported " . $i . "\n");
// endwhile;