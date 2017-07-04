<?php
include_once 'objet/Compte.php';
include_once 'objet/Data.php';

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$naissance = htmlspecialchars($_POST['naissance']);
$mail = htmlspecialchars($_POST['mail']);
$region = htmlspecialchars($_POST['region']);
$genre = htmlspecialchars($_POST['genre']);
$situation = htmlspecialchars($_POST['situation']);
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$personne = new Compte($nom, $prenom, $naissance, $mail, $region, $genre, $situation, $login, $mdp);
$personne->aff();


$data = new Data();
$data->createAccount($personne);
