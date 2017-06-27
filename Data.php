<?php
include_once './objet/Compte.php';
include_once './objet/Evenement.php';
class Data {

    public $compte;

    //Pour save les Comptes 
    
    
    function createAccount($personne) {
        if (!is_dir('./SaveAccount')) {
            mkdir('./SaveAccount');
        }
        $fichier = fopen('./SaveAccount/' . $personne->GetLogin() . '.txt', 'w');
        fwrite($fichier, serialize($personne));
        fclose($fichier);
    }
    
    // Pour logé un compte en session
    function readAccount($login, $mdp) {
        $dir = scandir('./SaveAccount/');
        foreach($dir as $files){
            if($files != '.' && $files != '..'&& $files != '.DS_Store' ){
                $file = unserialize(file_get_contents('./SaveAccount/'.$files));
                if($file->GetLogin() == $login && $file->GetMdp() == $mdp){
                    session_start();
                    $_SESSION['user'] = $file;
                    echo 'Vous etes connecté ';
                }elseif ($file->GetLogin() == $login && $file->GetMdp() !== $mdp) {
                    echo 'Identifiant ou Password incorrect';
                }elseif($file->GetLogin() !== $login && $file->GetMdp() == $mdp) {
                    echo 'Identifiant ou Password incorrect';
                }else{
                    echo 'vous n\'exister pas';
                }
            }
        }
    }
    
    
    
    // Pour sauvegarder un event
    
    function saveEvent($event) {
        if (!is_dir('./SaveEvent/'.$_SESSION['user']->getLogin())) {
            mkdir('./SaveEvent/'.$_SESSION['user']->getLogin());
        }
        if(isset($_SESSION['user'])){
            $fichier = fopen('./SaveEvent/'.$_SESSION['user']->getLogin().'/'.$event->getNom().'.txt', 'w');
            fwrite($fichier, serialize($event));
            fclose($fichier);
        }else{
            echo 'Vous n\'etes pas connecter';
        }
    }
    
    
    //Pour suprimer la session 
    function deco() {
        session_destroy();
    }
}