<?php

require("./client.php");

function listRecordings(){
    global $teli;

    $response = $teli->call->listRecordings();
    var_dump($response);
}

function getRecording(){
    global $teli;

    $response = $teli->call->getRecording();
    var_dump($response);
}
//getRecording();

function removeRecording(){
    global $teli;

    $response = $teli->call->removeRecording();
    var_dump($response);
}
//removeRecording();

function getRecords(){
    global $teli;

    $response = $teli->call->getRecords('04-20-2020','05-20-2020');
    var_dump($response);
}
//getRecords();