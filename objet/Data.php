<?php
include_once '../objet/Compte.php';
include_once '../objet/Evenement.php';

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
            if($files == '.' || $files == '..'|| $files == '.DS_Store' ){
                continue;
            }
            $file = unserialize(file_get_contents('./SaveAccount/'.$files));
            if($file->GetLogin() == $login && $file->GetMdp() == $mdp){
               return $file;
            }
        }
        return false;
    }
    
    
    
    // Pour sauvegarder un event
    
    function saveEvent($user, $event) {
        
        if (!is_dir('./SaveEvent/'.$user->getLogin())) {
            mkdir('./SaveEvent/'.$user->getLogin());
        }
        if(isset($user)){
            $fichier = fopen('./SaveEvent/'.$user->getLogin().'/'.$event->getNom().'.txt', 'w');
            fwrite($fichier, serialize($event));
            fclose($fichier);
        }else{
            echo 'Vous n\'etes pas connecter';
        }
    }
    
    function loadEvent($user, $file) {
        if ($dir = scandir('./SaveEvent/')) {
            foreach($dir as $files){
                if($files == $user->getLogin){
                    $file = fopen(unserialize($files), 'r');
                    fclose($file);
                    return $file;
                    
                }
            }
        }
    }
}