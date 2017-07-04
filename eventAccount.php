<?php

include_once 'objet/Data.php';
include_once 'objet/Compte.php';
include_once 'objet/Evenement.php';

$data= new Data();

$user = unserialize($_SESSION['user']);

$files = $data->loadEventAccount($user);

foreach($files as $event){
    $event->affichage();
}

