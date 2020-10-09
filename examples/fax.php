<?php

require ("./client.php");

function listAllFaxes(){
    global $teli;

    $response= $teli->fax->listAllFaxes(26423297);
    var_dump($response);
}

function send(){
    global $teli;

    $response= $teli->fax->send();
    var_dump($response);
}

function download(){
    global $teli;

    $response= $teli->fax->download();
    var_dump($response);
}

function deleteFax(){
    global $teli;

    $response= $teli->fax->delete();
    var_dump($response);
}

function listAllEmails(){
    global $teli;

    $response= $teli->fax->listAllEmails();
    var_dump($response);
}

function addAnEmailToFax(){
    global $teli;

    $response= $teli->fax->addAnEmailToFax();
    var_dump($response);
}

function removeAnEmail(){
    global $teli;

    $response= $teli->fax->removeAnEmail();
    var_dump($response);
}