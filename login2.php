<?php
include_once 'objet/Compte.php';
include_once 'nav.php';
include_once 'objet/Data.php';

$data = new Data();

if(empty($_POST['login']) || empty($_POST['mdp'])){
    header("efresh:02;url=formulaireLogin.html");
    echo 'pomme';
}

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$user = $data->readAccount($login, $mdp);
 if($user !== false) {
    $_SESSION['user'] = serialize($user);
    header("refresh:02;url=index.php");
    echo'Vous etes connecté.';
}else{
    header("refresh:02;url=formulaireInscription.html");
    echo 'Incorrect.';
}