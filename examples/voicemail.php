<?php

require ("./client.php");

function createAccount(){
    global $teli;

    $response = $teli->voicemail->createAccount([
        "name" => "abc",
        "inbox_number" => 1,
        "pin" => 2565,
        "transcribe" => "yes"
    ]);
    var_dump($response);
}

function getAccount(){
    global $teli;

    $response= $teli->voicemail->getAccount();
    var_dump($response);
}

function listAccount()
{
    global $teli;

    $response = $teli->voicemail->listAccount();
    var_dump($response);
}

function updateAccount(){
    global $teli;

    $response= $teli->voicemail->updateAccount();
    var_dump($response);
}

function removeAccount(){
    global $teli;

    $response= $teli->voicemail->removeAccount();
    var_dump($response);
}

function addInboxEmail(){
    global $teli;

    $response= $teli->voicemail->addInboxEmail();
    var_dump($response);
}

function removeInboxEmail(){
    global $teli;

    $response= $teli->voicemail->removeInboxEmail();
    var_dump($response);
}

function listVoicemail(){
    global $teli;

    $response= $teli->voicemail->listVoicemail(2478);
    var_dump($response);
}

function getVoicemail(){
    global $teli;

    $response= $teli->voicemail->getVoicemail();
    var_dump($response);
}


