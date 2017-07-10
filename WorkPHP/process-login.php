<?php
include_once '../model/Compte.php';
include_once '../model/Data.php';
session_start();

$data = new Data();
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

if(empty($login) || empty($mdp)){
    header('Location: ../partHtml/formulaireLogin.php');
}
$profil = $data->readAccount($login, $mdp);

if($profil == false){
    header('Location: ../partHtml/formulaireLogin.php');
}else{
$_SESSION['user'] = $profil;
header('Location: ../index.php');
}
?>