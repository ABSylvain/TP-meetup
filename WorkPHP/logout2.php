<?php

include_once './Data.php';
$data = new Data();
session_start();
if(isset($_POST['deco'])){
    $data->deco();
    echo 'Vous êtes bien déconnecté';
}

