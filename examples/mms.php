<?php

require ("./client.php");

function sendMMSURL(){
    global $teli;

    $response= $teli->mms->sendUrl();
    var_dump($response);
}

function sendMMSEmbedded(){
    global $teli;

    $response= $teli->mms->sendEmbedded();
    var_dump($response);
}