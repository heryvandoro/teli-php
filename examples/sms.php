<?php
include "./vendor/autoload.php";

use Teli\Teli;
$teli = new Teli('AC129fe07948e80fd295a90ea3b96381c4', 'e54deae4-40c7-43d7-940e-2c1171412d2b');

$response = $teli->sms->send([
    'source' => 2674935581,
    'destination' => 7205551212,
    'message' => 'Hello'
]);
var_dump($response);