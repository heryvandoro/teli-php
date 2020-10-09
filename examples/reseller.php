<?php

require ("./client.php");

function create(){
    global $teli;

    $response= $teli->reseller->create([
        'username'=> 'testing reseller php',
        'password'=> 'testing123',
        'email'=> 'testing@testingphp.com',
        'first_name'=> 'testing',
        'last_name'=> 'php',
        'phone_number'=> '5675675678',
        'address'=> 'abu dhabi street',
        'city'=> 'New York',
        'state'=> 'NY',
        'zip'=>'14240'
    ]);
    var_dump($response);
}

function get()
{
    global $teli;

    $response = $teli->reseller->get(21867);
    var_dump($response);
}

function listReseller(){
    global $teli;

    $response= $teli->reseller->listReseller();
    var_dump($response);
}

function enableAccount(){
    global $teli;

    $response= $teli->reseller->enableAccount(21867);
    var_dump($response);
}

function disableAccount(){
    global $teli;

    $response= $teli->reseller->disableAccount(21867);
    var_dump($response);
}

function showRates()
{
    global $teli;

    $response = $teli->reseller->showRates(21867);
    var_dump($response);
}

function addFunds(){
    global $teli;

    $response= $teli->reseller->addFunds(21867,200);
    var_dump($response);
}

function updateAccount(){
    global $teli;

    $response= $teli->reseller->updateAccount(21867,[
        'email'=> 'testing@testingphp.com'
    ]);
    var_dump($response);
}

function reassignNumberToResellerOrCustomer(){
    global $teli;

    $response= $teli->reseller->reassignNumberToResellerOrCustomer(21867,21450);
    var_dump($response);
}
//reassignNumberToResellerOrCustomer();

function updateBranding(){
    global $teli;

    $response= $teli->reseller->updateBranding(21867,[
        'old_domain'=> 'a.com',
        'brand'=> 'Budi',
        'domain'=> 'https://www.google.com'
    ]);
    var_dump($response);
}

function removeCSS(){
    global $teli;

    $response= $teli->reseller->removeCSS(21867);
    var_dump($response);
}
//removeCSS();

function removeLogo(){
    global $teli;

    $response= $teli->reseller->removeLogo(21867);
    var_dump($response);
}

function updateRates(){
    global $teli;

    $response= $teli->reseller->updateRates(21867,'[20000]');
    var_dump($response);
}

function setCreditLine(){
    global $teli;

    $response= $teli->reseller->setCreditLine(21450,21455);
    var_dump($response);
}

function resetPassword(){
    global $teli;

    $response= $teli->reseller->resetPassword(21450);
    var_dump($response);
}

function getToken(){
    global $teli;

    $response= $teli->reseller->getToken(21450);
    var_dump($response);
}

function enableOffnet(){
    global $teli;

    $response= $teli->reseller->enableOffnet(21455);
    var_dump($response);
}

function setChannelLimits(){
    global $teli;

    $response= $teli->reseller->setChannelLimits(21450,20000,30000);
    var_dump($response);
}
