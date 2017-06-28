<?php
session_start();
include_once '../Data.php';
include_once '../objet/Evenement.php';


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
include_once '../partHtml/logout.php';
$event->affichage();