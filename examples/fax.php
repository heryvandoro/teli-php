<?php

require ("./client.php");

function listAllFaxes(){
    global $teli;

    $response= $teli->fax->listAllFaxes(26423297);
    var_dump($response);
}

function send(){
    global $teli;
    $contents = file_get_contents("./images/people.jpg");

    $response= $teli->fax->send(26423297, [
        "destination" => '25687609',
        "recipient" => '5303895293',
        "files" => base64_encode($contents)
    ]);
    var_dump($response);
}

function download(){
    global $teli;

    $response= $teli->fax->download(123);
    var_dump($response);
}

function deleteFax(){
    global $teli;

    $response= $teli->fax->delete(123);
    var_dump($response);
}

function listAllEmails(){
    global $teli;

    $response= $teli->fax->listAllEmails(26439278);
    var_dump($response);
}

function addAnEmailToFax(){
    global $teli;

    $response= $teli->fax->addAnEmailToFax(26439278,'abc@test.com');
    var_dump($response);
}
addAnEmailToFax();

function removeAnEmail(){
    global $teli;

    $response= $teli->fax->removeAnEmail(26439278,'abc@test.com');
    var_dump($response);
}