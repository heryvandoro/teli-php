<?php

require ("./client.php");

function listAll(){
    global $teli;

    $response= $teli->userDids->listAll();
    var_dump($response);
}

function listAllSimple(){
    global $teli;

    $response= $teli->userDids->listSimple();
    var_dump($response);
}

function detail(){
    global $teli;

    $response= $teli->userDids->detail(5555555559);
    var_dump($response);
}

function remove(){
    global $teli;

    $response= $teli->userDids->remove();
    var_dump($response);
}
//remove();

function changeCallFlow(){
    global $teli;

    $response= $teli->userDids->changeCallFlow();
    var_dump($response);
}

function assignToChannelGroup(){
    global $teli;

    $response= $teli->userDids->assignToChannelGroup(26439278,457);
    var_dump($response);
}

function assignVoicemailBox(){
    global $teli;

    $response= $teli->userDids->assignVoicemailBox(24935020,455);
    var_dump($response);
}
//assignVoicemailBox();

function convertToFax(){
    global $teli;

    $response= $teli->userDids->convertToFax(24935020);
    var_dump($response);
}

function convertToVoiceIfFax(){
    global $teli;

    $response= $teli->userDids->convertToVoiceIfFax(24935020);
    var_dump($response);
}

function enableCNAM(){
    global $teli;

    $response= $teli->userDids->enableCNAM([
        'did_id'=>24935020
    ]);
    var_dump($response);
}

function disableCNAM(){
    global $teli;

    $response= $teli->userDids->disableCNAM([
        'did_id'=>24935020
    ]);
    var_dump($response);
}

function changeNoteOnDid(){
    global $teli;

    $response= $teli->userDids->changeNoteOnDid(24935020,'test');
    var_dump($response);
}

function removeNoteOnDid(){
    global $teli;

    $response= $teli->userDids->removeNoteOnDid(24935020);
    var_dump($response);
}

function showCallerIDSetLIDB(){
    global $teli;

    $response= $teli->userDids->showCallerIDSetLIDB(24935020);
    var_dump($response);
}

function setCallerIDLIDB(){
    global $teli;

    $response= $teli->userDids->setCallerIDLIDB(24935020,10);
    var_dump($response);
}

setCallerIDLIDB();
function setUrlSMSOnSpecificPhone(){
    global $teli;

    $response= $teli->userDids->setUrlSMSOnSpecificPhone(24935020,'https://www.google.com');
    var_dump($response);
}

function removeUrlSMS(){
    global $teli;

    $response= $teli->userDids->removeUrlSMS(24935020);
    var_dump($response);
}

function setListing(){
    global $teli;

    $response= $teli->userDids->setListing();
    var_dump($response);
}
//setListing();

function getListing(){
    global $teli;

    $response= $teli->userDids->getListing(24935020);
    var_dump($response);
}
//getListing();

function removeListing(){
    global $teli;

    $response= $teli->userDids->removeListing();
    var_dump($response);
}
//removeListing();

function setCallForwarding(){
    global $teli;

    $response= $teli->userDids->setCallForwarding([
        'did_id'=> 24935020,
        'forward_to'=> 2674935581
    ]);
    var_dump($response);
}

function listBackorders(){
    global $teli;

    $response= $teli->userDids->listBackorders();
    var_dump($response);
}

function setDeliveryURL(){
    global $teli;

    $response= $teli->userDids->setDeliveryURL(24935020,'https://www.google.com');
    var_dump($response);
}

function listHiddenOffsetDids(){
    global $teli;

    $response= $teli->userDids->listHiddenOffsetDids();
    var_dump($response);
}

function createFlow(){
    global $teli;

    $response= $teli->userDids->createFlow([
        'flow_name'=> 'test flow php',
        'flow_data'=> '[{"command":"route","options":{"duration":"15","destination":{"type":"call_forward","value":"123"}}}]'
    ]);
    var_dump($response);
}

function getFlow(){
    global $teli;

    $response= $teli->userDids->getFlow(41223);
    var_dump($response);
}

function listFlows(){
    global $teli;

    $response= $teli->userDids->listFlows();
    var_dump($response);
}

function updateFlow(){
    global $teli;

    $response= $teli->userDids->updateFlow([
        'flow_id'=> 41223,
        'flow_name'=> 'Testing 2 Php flow',
        'flow_data'=>'[{"command":"route","options":{"duration":"15","destination":{"type":"call_forward","value":"123"}}}]'
    ]);
    var_dump($response);
}

function removeFlow(){
    global $teli;

    $response= $teli->userDids->removeFlow(41223);
    var_dump($response);
}

function setDefaultFlow(){
    global $teli;

    $response= $teli->userDids->setDefaultFlow(41223);
    var_dump($response);
}

function bulkRemoveNumbers(){
    global $teli;

    $response= $teli->userDids->bulkRemoveNumbers(["2674935581", "5055105878"]);
    var_dump($response);
}

function blockInboundSMS(){
    global $teli;

    $response= $teli->userDids->blockInboundSMS();
    var_dump($response);
}
//blockInboundSMS();

function removeInboundSMSBlock(){
    global $teli;

    $response= $teli->userDids->removeInboundSMSBlock();
    var_dump($response);
}