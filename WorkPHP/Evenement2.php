<?php
include_once './Data.php';
include_once './WorkPHP/Evenement.php';
include_once './partHtml/logout.php';

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
$event->affichage();
$data->saveEvent($event);