<?php

require ("./client.php");

function listStates(){
    global $teli;

    $response= $teli->phone->states();
    var_dump($response);
}

function rateCenters(){
    global $teli;

    $response= $teli->phone->rateCenters('AB');
    var_dump($response);
}

function localNumbers(){
    global $teli;

    $response= $teli->phone->localNumbers();
    var_dump($response);
}
//localNumbers();

function tollfreeNumbers(){
    global $teli;

    $response= $teli->phone->tollFreeNumbers();
    var_dump($response);
}

function orderSingleNumber(){
    global $teli;

    $response= $teli->phone->orderSingleNumber([
        'number'=> '5675675678'
    ]);
    var_dump($response);
}
//orderSingleNumber();

function searchVanityTollfreeNumbers(){
    global $teli;

    $response= $teli->phone->searchVanityTollfreeNumbers('555*voip');
    var_dump($response);
}
//searchVanityTollfreeNumbers();

function orderVanityTollfreeNumber(){
    global $teli;

    $response= $teli->phone->orderVanityTollfreeNumber(3039930000,'yes');
    var_dump($response);
}
//orderVanityTollfreeNumber();

function listAll(){
    global $teli;

    $response= $teli->phone->listAll();
    var_dump($response);
}

function listAllSimple(){
    global $teli;

    $response= $teli->phone->listSimple();
    var_dump($response);
}

function detail(){
    global $teli;

    $response= $teli->phone->detail(5555555559);
    var_dump($response);
}

function remove(){
    global $teli;

    $response= $teli->phone->remove();
    var_dump($response);
}
//remove();

function changeCallFlow(){
    global $teli;

    $response= $teli->phone->changeCallFlow();
    var_dump($response);
}

function assignToChannelGroup(){
    global $teli;

    $response= $teli->phone->assignToChannelGroup(26439278,457);
    var_dump($response);
}

function assignVoicemailBox(){
    global $teli;

    $response= $teli->phone->assignVoicemailBox(24935020,455);
    var_dump($response);
}
//assignVoicemailBox();

function convertToFax(){
    global $teli;

    $response= $teli->phone->convertToFax(24935020);
    var_dump($response);
}

function convertToVoiceIfFax(){
    global $teli;

    $response= $teli->phone->convertToVoiceIfFax(24935020);
    var_dump($response);
}

function enableCNAM(){
    global $teli;

    $response= $teli->phone->enableCNAM([
        'did_id'=>24935020
    ]);
    var_dump($response);
}

function disableCNAM(){
    global $teli;

    $response= $teli->phone->disableCNAM([
        'did_id'=>24935020
    ]);
    var_dump($response);
}

function changeNoteOnDid(){
    global $teli;

    $response= $teli->phone->changeNoteOnDid(24935020,'test');
    var_dump($response);
}

function removeNoteOnDid(){
    global $teli;

    $response= $teli->phone->removeNoteOnDid(24935020);
    var_dump($response);
}

function showCallerIDSetLIDB(){
    global $teli;

    $response= $teli->phone->showCallerIDSetLIDB(24935020);
    var_dump($response);
}

function setUrlSMSOnSpecificPhone(){
    global $teli;

    $response= $teli->phone->setUrlSMSOnSpecificPhone(24935020,'https://www.google.com');
    var_dump($response);
}

function removeUrlSMS(){
    global $teli;

    $response= $teli->phone->removeUrlSMS(24935020);
    var_dump($response);
}

function setListing(){
    global $teli;

    $response= $teli->phone->setListing();
    var_dump($response);
}
//setListing();

function getListing(){
    global $teli;

    $response= $teli->phone->getListing(24935020);
    var_dump($response);
}
//getListing();

function removeListing(){
    global $teli;

    $response= $teli->phone->removeListing();
    var_dump($response);
}
//removeListing();

function setCallForwarding(){
    global $teli;

    $response= $teli->phone->setCallForwarding([
        'did_id'=> 24935020,
        'forward_to'=> 2674935581
    ]);
    var_dump($response);
}

function listBackorders(){
    global $teli;

    $response= $teli->phone->listBackorders();
    var_dump($response);
}

function setDeliveryURL(){
    global $teli;

    $response= $teli->phone->setDeliveryURL(24935020,'https://www.google.com');
    var_dump($response);
}

function listHiddenOffsetDids(){
    global $teli;

    $response= $teli->phone->listHiddenOffsetDids();
    var_dump($response);
}

function createFlow(){
    global $teli;

    $response= $teli->phone->createFlow([
        'flow_name'=> 'test flow php',
        'flow_data'=> '[{"command":"route","options":{"duration":"15","destination":{"type":"call_forward","value":"123"}}}]'
    ]);
    var_dump($response);
}

function getFlow(){
    global $teli;

    $response= $teli->phone->getFlow(41223);
    var_dump($response);
}

function listFlows(){
    global $teli;

    $response= $teli->phone->listFlows();
    var_dump($response);
}

function updateFlow(){
    global $teli;

    $response= $teli->phone->updateFlow([
        'flow_id'=> 41223,
        'flow_name'=> 'Testing 2 Php flow',
        'flow_data'=>'[{"command":"route","options":{"duration":"15","destination":{"type":"call_forward","value":"123"}}}]'
    ]);
    var_dump($response);
}

function removeFlow(){
    global $teli;

    $response= $teli->phone->removeFlow(41223);
    var_dump($response);
}

function setDefaultFlow(){
    global $teli;

    $response= $teli->phone->setDefaultFlow(41223);
    var_dump($response);
}

function bulkRemoveNumbers(){
    global $teli;

    $response= $teli->phone->bulkRemoveNumbers(["2674935581", "5055105878"]);
    var_dump($response);
}

function blockInboundSMS(){
    global $teli;

    $response= $teli->phone->blockInboundSMS();
    var_dump($response);
}
//blockInboundSMS();

function removeInboundSMSBlock(){
    global $teli;

    $response= $teli->phone->removeInboundSMSBlock();
    var_dump($response);
}
removeInboundSMSBlock();