<?php

require ("./client.php");

function createOrder(){
    global $teli;

    $response= $teli->lnp->createOrder([
        'numbers'=> 5555555559,
        'btn'=> 5555555556,
        'location_type'=> "business",
        'business_contact'=> "Bobby McFrobbys",
        'business_name'=> "Bob's Telecos",
        'first_name'=> null,
        'last_name'=> null,
        'account_number'=> "123456",
        'service_address'=> "123 Some Street",
        'service_city'=> "Englewood",
        'service_state'=> "CO",
        'service_zip'=> "80112",
        'partial_port'=> 0,
        'partial_port_details'=> null,
        'wireless_number'=> 0,
        'wireless_pin'=> null,
        'caller_id'=> null,
        'foc_date'=> null
    ]);
    var_dump($response);
}

function listOrder(){
    global $teli;

    $response= $teli->lnp->listOrder();
    var_dump($response);
}

function getSpecificInformation(){
    global $teli;

    $response= $teli->lnp->getSpecificInformation(4988);
    var_dump($response);
}

function checkNumberPortability(){
    global $teli;

    $response= $teli->lnp->checkNumberPortability("5555555556");
    var_dump($response);
}

function bulkCheckNumberPortability(){
    global $teli;

    $response= $teli->lnp->bulkCheckNumberPortability("5555555555,5555555554");
    var_dump($response);
}
//bulkCheckNumberPortability();
function submitSignature(){
    global $teli;

    $response= $teli->lnp->submitSignature(81527,"abc");
    var_dump($response);
}
submitSignature();

function requestCSVList(){
    global $teli;

    $response= $teli->lnp->requestCSVList(81527);
    var_dump($response);
}

requestCSVList();