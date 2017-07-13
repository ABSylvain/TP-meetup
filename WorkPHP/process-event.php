<?php
include_once '../model/Evenement.php';
include_once '../model/Data.php';
include_once '../model/Compte.php';
session_start();

$nom = htmlspecialchars($_POST['nom']);
$description = htmlspecialchars($_POST['description']);
$lieu = htmlspecialchars($_POST['region']);
$categorie = htmlspecialchars($_POST['categorie']);
$date = htmlspecialchars($_POST['date']);
$heure = htmlspecialchars($_POST['heure']);
$dure = htmlspecialchars($_POST['dure']);
$ressource = htmlspecialchars($_POST['ressource']);
$capacite = htmlspecialchars($_POST['capacite']);
$creator = $_SESSION['user']->GetLogin();

$data = new Data();
$event = new Evenement($nom, $lieu, $dure, $categorie, $date, $heure, $description, $ressource, $capacite, $creator);
if($_SESSION != false){
    $compte = $_SESSION['user'];
    
}else{
    echo 'Vous n\'etes pas connecté !'; 
}

$user = $compte->GetLogin();
$data->saveEvent($user, $event);
header('Location: ../index.php');


?>