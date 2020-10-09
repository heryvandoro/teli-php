<?php

require ("./client.php");

function verifyCapability(){
    global $teli;

    $response= $teli->offnetProvisioning->verifyCapability(3039930000);
    var_dump($response);
}

function submitNumber(){
    global $teli;

    $response= $teli->offnetProvisioning->submitNumber(3039930000,'yes');
    var_dump($response);
}

function listOffsetNumbers(){
    global $teli;

    $response= $teli->offnetProvisioning->listOffsetNumbers();
    var_dump($response);
}

function statusOfSubmit(){
    global $teli;

    $response= $teli->offnetProvisioning->statusOfSubmit(742586);
    var_dump($response);
}

function listJobNumbers(){
    global $teli;

    $response= $teli->offnetProvisioning->listJobNumbers(742586);
    var_dump($response);
}



