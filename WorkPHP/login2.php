<?php
include_once './Data.php';

$data = new Data();

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$data->readAccount($login, $mdp);