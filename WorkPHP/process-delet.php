<?php 
include_once '../model/Data.php';
include_once '../model/Evenement.php';
session_start();

$nom = htmlspecialchars($_POST['nom']);

$login = $_SESSION['user']->GetLogin();
$data = new Data();

$data->delet($nom, $login);
?>