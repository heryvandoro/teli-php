<?php

require ("./client.php");

function setIncomingCallUrl(){
    global $teli;

    $response= $teli->callApi->setIncomingCallUrl(3039930000,'https://www.google.com');
    var_dump($response);
}

function listCall(){
    global $teli;

    $response= $teli->callApi->listCall();
    var_dump($response);
}

function detail(){
    global $teli;

    $response= $teli->callApi->detail('ID4111140f4957471bb48be73a6410e716-CAf8f53139e3c04fad8111ca004a3ce16e');
    var_dump($response);
}

function make(){
    global $teli;

    $response= $teli->callApi->make([
        'From'=> 16175551212,
        'To'=> 13035551212,
        'Url'=> 'https://api.teleapi.net/rcml/fourscore.xml'
    ]);
    var_dump($response);
}
make();

function createQueue(){
    global $teli;

    $response= $teli->callApi->createQueue([
        'applicationUrl'=> 'http://www.mocky.io/v2/5dd4a91f2f0000f905d4fb63',
        'applicationUrlMethod'=> 'POST',
        'phoneNumber'=> 13035551212
    ]);
    var_dump($response);
}
//createQueue();

function listConference(){
    global $teli;

    $response= $teli->callApi->listConference('2012-04-12');
    var_dump($response);
}
//listConference();

function getConference(){
    global $teli;

    $response= $teli->callApi->getConference('2012-04-12');
    var_dump($response);
}
//getConference();

function listConferenceParticipant(){
    global $teli;

    $response= $teli->callApi->listConferenceParticipant();
    var_dump($response);
}
//listConferenceParticipant();

function createClient(){
    global $teli;

    $response= $teli->callApi->createClient([
        'Login' => 'andi',
        'Password' => 'baba12!!!22B'
    ]);
    var_dump($response);
}

function changeClientPassword(){
    global $teli;

    $response= $teli->callApi->changeClientPassword('CLc391a9aabb2e4917b493e4700ca82961',[
        'password'=> 'abctest'
    ]);
    var_dump($response);
}
//changeClientPassword();

function deleteClient(){
    global $teli;

    $response= $teli->callApi->deleteClient('CL1b60baa5ce1e432481cc1f575bd53899');
    var_dump($response);
}

function listClient(){
    global $teli;

    $response= $teli->callApi->listClient();
    var_dump($response);
}

function listRecordings(){
    global $teli;

    $response= $teli->callApi->listRecordings();
    var_dump($response);
}

function listCallRecordings(){
    global $teli;

    $response= $teli->callApi->listCallRecordings('CL1b60baa5ce1e432481cc1f575bd53899');
    var_dump($response);
}
//listCallRecordings();

function deleteRecordingRecords(){
    global $teli;

    $response= $teli->callApi->deleteRecordingRecords('abc');
    var_dump($response);
}
//deleteRecordingRecords();


