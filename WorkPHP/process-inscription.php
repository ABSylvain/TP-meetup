<?php
include_once '../model/Compte.php';
include_once '../model/Data.php';

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$naissance = htmlspecialchars($_POST['naissance']);
$genre = htmlspecialchars($_POST['genre']);
$situation = htmlspecialchars($_POST['situation']);
$mail = htmlspecialchars($_POST['mail']);
$region = htmlspecialchars($_POST['region']);
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$data = new Data();
$compte = new Compte($nom, $prenom, $naissance, $mail, $region, $genre, $situation, $login, $mdp);

$data->createAccount($compte);
header('Location: ../index.php');

?>