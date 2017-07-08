<?php
session_start();
include_once 'objet/Compte.php';

if($_SESSION != true){
    echo '<h3><a href="formulaireLogin.html">Connexion</a></h3>';
    echo '<h3><a href="formulaireInscription.html">Inscription</a></h3>';
    echo '<h3><a href="index.php">Acceuil</a></h3>';
}else{
    $user = unserialize($_SESSION['user']);
    echo '<h3>'.$user->GetLogin().'</h3>';
    echo '<h3><a href="formulaireEvent.html">Creer votre event</a></h3>';
    echo '<form method="POST" action="logout2.php">
            <button name="deco">Deconnextion</button>
          </form>';
    echo '<h3><a href="index.php">Acceuil</a></h3>';
}