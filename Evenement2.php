<?php
include_once 'nav.php';
include_once 'objet/Data.php';
include_once 'objet/Evenement.php';
include_once 'objet/Compte.php';

$nom = htmlspecialchars($_POST['nom']);
$description = htmlspecialchars($_POST['description']);
$categorie = htmlspecialchars($_POST['categorie']);
$date = htmlspecialchars($_POST['date']);
$heure = htmlspecialchars($_POST['heure']);
$dure = htmlspecialchars($_POST['dure']);
$ressource = htmlspecialchars($_POST['ressource']);
$capacite = htmlspecialchars($_POST['capacite']);
$lieu = htmlspecialchars($_POST['region']);


$data = new Data();
$event = new Evenement($nom, $lieu, $dure, $categorie, $date, $heure, $description, $ressource, $capacite);

$data->saveEvent(unserialize($_SESSION['user']), $event);
include_once 'logout2.php';
$event->affichage();