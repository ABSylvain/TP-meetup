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

    // Charger un compte

    function readAccount($login, $mdp) {
        $dir = scandir('./SaveAccount/');
        foreach ($dir as $files) {
            if ($files == '.' || $files == '..' || $files == '.DS_Store') {
                continue;
            }
            $file = unserialize(file_get_contents('./SaveAccount/' . $files)); 
            if ($file->GetLogin() == $login && $file->GetMdp() == $mdp) {
                return $file;
            }
        }
        return false;
    }

    // Pour sauvegarder un event

    function saveEvent($user, $event) {

        if (!is_dir('./SaveEvent/' . $user->getLogin())) {
            mkdir('./SaveEvent/' . $user->getLogin());
        }
        if (isset($user)) {
            $fichier = fopen('./SaveEvent/' . $user->getLogin() . '/' . $event->getNom() . '.txt', 'w');
            fwrite($fichier, serialize($event));
            fclose($fichier);
        } else {
            echo 'Vous n\'etes pas connecter';
        }
    }

    //Charger les evenements

    function loadEventAccount($user) {
        $event = [];
        $dirs = scandir('./SaveEvent/');
        foreach ($dirs as $dir) {
            if ($dir != $user->getLogin()) {
                continue;
            }
            $files = scandir('./SaveEvent/' . $dir . '/');
            foreach ($files as $file) {
                if ($file == '.' || $file == '..' || $file == '.DS_Store') {
                    continue;
                }
                $file = unserialize(file_get_contents(('./SaveEvent/' . $dir . '/' . $file)));
                $event[] = $file;
            }
        }
        return $event;
    }

    function loadEvent() {
        $event = [];
        $dirs = scandir('./SaveEvent/');
        foreach ($dirs as $dir) {
            if ($dir == '.' || $dir == '..' || $dir == '.DS_Store') {
                continue;
            }
            $files = scandir('./SaveEvent/' . $dir . '/');
            foreach ($files as $file) {
                if ($file == '.' || $file == '..' || $file == '.DS_Store'|| $file == '.txt') {
                    continue;
                }
                $file = unserialize(file_get_contents(('./SaveEvent/' . $dir . '/' . $file)));
                $event[] = $file;
            }
        }
        return $event;
    }
    function delete() {
       
    }

}