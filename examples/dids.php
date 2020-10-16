<?php

require ("./client.php");

function listStates(){
    global $teli;

    $response= $teli->dids->states();
    var_dump($response);
}

function rateCenters(){
    global $teli;

    $response= $teli->dids->rateCenters('AB');
    var_dump($response);
}

function localNumbers(){
    global $teli;

    $response= $teli->dids->localNumbers();
    var_dump($response);
}
//localNumbers();

function tollfreeNumbers(){
    global $teli;

    $response= $teli->dids->tollFreeNumbers();
    var_dump($response);
}

function orderSingleNumber(){
    global $teli;

    $response= $teli->dids->orderSingleNumber([
        'number'=> '5675675678'
    ]);
    var_dump($response);
}
//orderSingleNumber();

function searchVanityTollfreeNumbers(){
    global $teli;

    $response= $teli->dids->searchVanityTollfreeNumbers('555*voip');
    var_dump($response);
}
//searchVanityTollfreeNumbers();

function orderVanityTollfreeNumber(){
    global $teli;

    $response= $teli->dids->orderVanityTollfreeNumber(3039930000,'yes');
    var_dump($response);
}
//orderVanityTollfreeNumber();

function getNPA(){
    global $teli;

    $response= $teli->dids->getNPA();
    var_dump($response);
}

function getNXX(){
    global $teli;

    $response= $teli->dids->getNXX();
    var_dump($response);
}

function getIntlRatesCSV(){
    global $teli;

    $response= $teli->dids->getIntlRatesCSV();
    var_dump($response);
}

function getIntlCountriesList(){
    global $teli;

    $response= $teli->dids->getIntlCountriesList();
    var_dump($response);
}

function getIntlStatesList(){
    global $teli;

    $response= $teli->dids->getIntlStatesList();
    var_dump($response);
}