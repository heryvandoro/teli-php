<?php

require ("./client.php");

function sendMMSURL(){
    global $teli;

    $response= $teli->mms->sendUrl();
    var_dump($response);
}

function sendMMSEmbedded(){
    global $teli;

    $response= $teli->mms->sendEmbedded([
        'destination'=> 7205551212,
        'source'=> 2674935581,
        'file_data'=> 'test file mms php',
    ]);
    var_dump($response);
}
sendMMSEmbedded();