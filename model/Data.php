<?php
include_once 'Compte.php';
include_once 'Evenement.php';

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
        
        if (!is_dir('./SaveEvent/')) {
            mkdir('./SaveEvent/');
        }
        if (!is_dir('./SaveEvent/'.$user)) {
            mkdir('./SaveEvent/'.$user);
        }
        if(isset($user)){
            $fichier = fopen('./SaveEvent/'.$user.'/'.$event->getNom().'.txt', 'w');
            fwrite($fichier, serialize($event));
            fclose($fichier);
        }else{
            echo 'Vous n\'etes pas connecter';
        }
    }
    
    function loadEvent($user) {
        if ($dir = scandir('./SaveEvent/')) {
            foreach($dir as $files){
                if($files[0] != '.' && $files != 'DS_Store' && $files == $user->GetLogin()){
                    foreach(scandir('./SaveEvent/'.$files) as $file){
                        if($file[0] != '.' && $file != 'DS_Store' ){
                            $event = unserialize(file_get_contents('./SaveEvent/'.$files.'/'.$file, 'r'));
                            return $event;
                        }
                    }
                }
            }
        }
    }

    function loadAllEvent() {
        $tab = [];
        if ($dir = scandir('./SaveEvent/')) {
            foreach($dir as $files){
                if($files[0] != '.' && $files != 'DS_Store'){
                    foreach(scandir('./SaveEvent/'.$files) as $file){
                        if($file[0] != '.' && $file != 'DS_Store' ){
                            $event = unserialize(file_get_contents('./SaveEvent/'.$files.'/'.$file, 'r'));
                           $tab[] = $event;
                        }
                    }
                }
            }
        }
        return $tab;
    }

    function delet($nom, $login) {
        $path = './SaveEvent/'.$login.'/'.$nom.'.txt';
        if(is_file($path)) {
            unlink($path);
        }
    }
    function eventtrier($categori) {
        $tab = [];
        if ($dir = scandir('./SaveEvent/')) {
            foreach($dir as $files){
                if($files[0] != '.' && $files != 'DS_Store'){
                    foreach(scandir('./SaveEvent/'.$files) as $file){
                        if($file[0] != '.' && $file != 'DS_Store' ){
                            $event = unserialize(file_get_contents('./SaveEvent/'.$files.'/'.$file, 'r'));
                            if($event->getCategorie() == $categori)
                            $tab[] = $event;
                        }
                    }
                }
            }
        }
        return $tab;
    }
    function suprauto(){
        $date = date(DATE_RFC2822);
        if ($dir = scandir('./SaveEvent/')){
            foreach($dir as $files){
                if($files[0] != '.' && $files != 'DS_Store'){
                    foreach(scandir('./SaveEvent/'.$files) as $file){
                        if($file[0] != '.' && $file != 'DS_Store' ){
                            $event = unserialize(file_get_contents('./SaveEvent/'.$files.'/'.$file, 'r'));
                            if($event->getDatetoday() <= $date){
                                unlink($event);
                            }
                        }
                    }
                }
            }
        }
    }
    function ajouparticip($nom) {
        if ($dir = scandir('./SaveEvent/')) {
            foreach($dir as $files){
                if($files[0] != '.' && $files != 'DS_Store'){
                    foreach(scandir('./SaveEvent/'.$files) as $file){
                        if($file[0] != '.' && $file != 'DS_Store' ){
                            $event = unserialize(file_get_contents('./SaveEvent/'.$files.'/'.$file, 'r'));
                            if($event->getNom == $nom){
                                $event->setParticip();
                            }
                        }
                    }
                }
            }
        }
    }
}