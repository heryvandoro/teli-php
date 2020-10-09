<?php

require ("./client.php");

function createAccount(){
    global $teli;

    $response= $teli->sip->createAccount([
        'account_type'=> 'device',
        'username'=> 'testphp',
        'password'=> 'testphp'
    ]);
    var_dump($response);
}

function listAccount(){
    global $teli;

    $response= $teli->sip->listAccount();
    var_dump($response);
}

function updateAccount(){
    global $teli;

    $response= $teli->sip->updateAccount([
        'sipaccount_id'=> 41665,
        'account_type'=> 'server',
        'username'=> 'testingphpsip',
        'password'=> 'testingphpsip'
    ]);
    var_dump($response);
}

function removeAccount(){
    global $teli;

    $response= $teli->sip->removeAccount(41665);
    var_dump($response);
}