<?php
session_start();
include_once '../Data.php';


$data = new Data();

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);
$user = $data->readAccount($login, $mdp);
 if($user !== false) {
    $_SESSION['user'] = serialize($user);
    echo'Vous etes connecté.';
}else{
    echo 'Incorrect';
}
