<?php

include_once 'objet/Data.php';
include_once 'objet/Evenement.php';

$data = new Data();

$eventlist = $data->loadEvent();

foreach($eventlist as $event){
    $event->affichage();
}