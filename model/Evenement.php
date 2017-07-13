<?php

class Evenement {
    protected $nom;
    protected $lieu;
    protected $dure;
    protected $categorie;
    protected $date;
    protected $heure;
    protected $description;
    protected $ressource;
    protected $capacite;
    protected $creator;
    protected $datetoday;
    protected $particip;
    
    function __construct($nom, $lieu, $dure, $categorie, $date, $heure, $description, $ressource, $capacite, $creator) {
        $this->nom = $nom;
        $this->lieu = $lieu;
        $this->dure = $dure;
        $this->categorie = $categorie;
        $this->date = $date;
        $this->heure= $heure;
        $this->description = $description;
        $this->ressource = $ressource;
        $this->capacite = $capacite;
        $this->creator = $creator;
        $this->datetoday = date(DATE_RFC2822);
        $this->particip = 0;
    }
    function getNom() {
        return $this->nom;
    }
    function getLieu() {
        return $this->lieu;
    }
    function getDure() {
        return $this->dure;
    }
    function getCategorie() {
        return $this->categorie;
    }
    function getDate() {
        return $this->date;
    }
    function getDescription() {
        return $this->description;
    }
    function getRessource() {
        return $this->ressource;
    }
    function getCapacite() {
        return $this->capacite;
    }
    function getHeure() {
        return $this->heure;
    }
    function getCreator() {
        return $this->creator;
    }
    function getDatetoday() {
        return $this->datetoday;
    }
    function getParticip() {
        return $this->particip;
    }
    function setParticip($ajout) {
        $this->particip += $ajout;
    }
    function affichage() {
        echo '<h3>Vos info : </h3>';
        echo '<h4>Nom : </h4><p>'.$this->nom.'</p>';
        echo '<h4>Lieu : </h4><p>'.$this->lieu.'</p>';
        echo '<h4>Durée : </h4><p>'.$this->dure.'</p>';
        echo '<h4>Capacité : </h4><p>'.$this->capacite.'</p>';
        echo '<h4>Categorie : </h4><p>'.$this->categorie.'</p>';
        echo '<h4>Rescource : </h4><p>'.$this->ressource.'</p>';
        echo '<h4>Description : </h4><p>'.$this->description.'</p>';
        echo '<h4>Date : </h4><p>'.$this->date.'</p>';
        echo '<h4>Heure : </h4><p>'.$this->heure.'</p>';
        echo '<h4>Creator : </h4><p>'.$this->creator.'</p>';
        echo '<h4>Date de creation : </h4><p>'.$this->datetoday.'</p>';
        echo '<h4>Nombre de particip : </h4><p>'.$this->particip.'</p>';
        
    }
}
