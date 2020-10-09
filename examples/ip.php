<?php

require ("./client.php");

function createEndpoint(){
    global $teli;

    $response= $teli->ip->createEndpoint([
        'ip_address'=> '192.168.1.1',
        'ip_name'=>'test php'
    ]);
    var_dump($response);
}

function listEndpoint(){
    global $teli;

    $response= $teli->ip->listEndpoint();
    var_dump($response);
}

function removeEndpoint(){
    global $teli;

    $response= $teli->ip->removeEndpoint(4885);
    var_dump($response);
}
