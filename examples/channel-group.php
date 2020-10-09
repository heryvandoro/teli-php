<?php

require ("./client.php");

function listChannelGroup(){
    global $teli;

    $response= $teli->channelGroup->listChannelGroup();
    var_dump($response);
}

function get(){
    global $teli;

    $response= $teli->channelGroup->get(454);
    var_dump($response);
}

function create(){
    global $teli;

    $response = $teli->channelGroup->create([
        'name' => ' Channel group testing php',
        'channels' => '4'
    ]);
    var_dump($response);
}

function update(){
    global $teli;

    $response= $teli->channelGroup->update(463,[
        'name'=>'Testing update channel group php',
        'channels'=>'5'
    ]);
    var_dump($response);
}

function remove(){
    global $teli;

    $response= $teli->channelGroup->remove(454);
    var_dump($response);
}