<?php

require ("./client.php");

function createRecord(){
    global $teli;

    $response= $teli->emergency->createRecord([
        'did_number'=> 525634721,
        'full_name'=> 'Test php',
        'address'=> 'abu dabhi street',
        'city'=> 'dubai',
        'state'=> 'NY',
        'zip'=> '14420'
    ]);
    var_dump($response);
}
createRecord();

function lookupRecord(){
    global $teli;

    $response= $teli->emergency->lookupRecord();
    var_dump($response);
}
//lookupRecord();

function listRecord(){
    global $teli;

    $response= $teli->emergency->listRecord(true);
    var_dump($response);
}

function updateRecord(){
    global $teli;

    $response= $teli->emergency->updateRecord();
    var_dump($response);
}

function removeRecord(){
    global $teli;

    $response= $teli->emergency->removeRecord();
    var_dump($response);
}

function validateRecord(){
    global $teli;

    $response= $teli->emergency->validateRecord();
    var_dump($response);
}

function createAlertGroup(){
    global $teli;

    $response= $teli->emergency->createAlertGroup("testing alert group php");
    var_dump($response);
}

function listAlertGroup(){
    global $teli;

    $response= $teli->emergency->listAlertGroup();
    var_dump($response);
}

function lookupAlertGroup(){
    global $teli;

    $response= $teli->emergency->lookupAlertGroup();
    var_dump($response);
}
//lookupAlertGroup();

function removeAlertGroup(){
    global $teli;

    $response= $teli->emergency->removeAlertGroup(933);
    var_dump($response);
}

function assignNumberToAlertGroup(){
    global $teli;

    $response= $teli->emergency->assignNumberToAlertGroup();
    var_dump($response);
}

function unAssignNumberToAlertGroup(){
    global $teli;

    $response= $teli->emergency->unAssignNumberToAlertGroup();
    var_dump($response);
}

function addNotificationToAlertGroup(){
    global $teli;

    $response= $teli->emergency->addNotificationToAlertGroup();
    var_dump($response);
}

function removeNotifyFromAlertGroup(){
    global $teli;

    $response= $teli->emergency->removeNotifyFromAlertGroup();
    var_dump($response);
}