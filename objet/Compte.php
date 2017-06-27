<?php

class Compte {
    protected $nom;
    protected $prenom;
    protected $naissance;
    protected $mail;
    protected $region;
    protected $genre;
    protected $situation;
    protected $login;
    protected $mdp;
    
    public function GetNom() {
        return $this->nom;
    }
    public function GetPrenom() {
        return $this->prenom;
    }
    public function GetNaissance() {
        return $this->naissance;
    }
    public function GetMail() {
        return $this->mail;
    }
    public function GetRegion() {
        return $this->region;
    }
    public function GetGenre() {
        return $this->genre;
    }
    public function GetSituation() {
        return $this->situation;
    }
    public function GetLogin() {
        return $this->login;
    }
    public function GetMdp() {
        return $this->mdp;
    }
            
    function __construct($nom, $prenom, $naissance, $mail, $region, $genre, $situation, $login, $mdp) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = $naissance;
        $this->mail = $mail;
        $this->region = $region;
        $this->genre = $genre;
        $this->situation = $situation;
        $this->login = $login;
        $this->mdp = $mdp;
    }
    
    public function aff() {
        echo '<h3>Vos coordonné : </h3>';
        echo '<h4>Nom : </h4><p>'.$this->nom.'</p>';
        echo '<h4>Prenom : </h4><p>'.$this->prenom.'</p>';
        echo '<h4>Date de Naissance : </h4><p>'.$this->naissance.'</p>';
        echo '<h4>Email : </h4><p>'.$this->mail.'</p>';
        echo '<h4>Region : </h4><p>'.$this->region.'</p>';
        echo '<h4>Genre : </h4><p>'.$this->genre.'</p>';
        echo '<h4>Situation : </h4><p>'.$this->situation.'</p>';
        echo '<h4>Pseudo : </h4><p>'.$this->login.'</p>';
        echo '<h4>Mpd : </h4><p>'.$this->mdp.'</p>';
    }
    
}
