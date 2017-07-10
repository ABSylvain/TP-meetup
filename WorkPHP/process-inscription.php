<?php
include_once '../model/Compte.php';
include_once '../model/Data.php';

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$data = new Data();
$compte = new Compte('bob', 'boby', 01/02/03, 'boby@gmail.com', 'lyon', 'biz', 'solo', $login, $mdp);

$data->createAccount($compte);
echo $compte->GetLogin().' '.$compte->GetMdp();
?>