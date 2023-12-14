<?php

class Admin {

    private $matricule;
    private $m2p;
    private $Nom;
    private $Adresse;

    public function __construct($matricule, $m2p, $Nom, $Adresse) {
        $this->matricule = $matricule;
        $this->m2p = $m2p;
        $this->Nom = $Nom;
        $this->Adresse = $Adresse;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function setM2p($m2p) {
        $this->m2p = $m2p;
    }

    public function getM2p() {
        return $this->m2p;
    }

    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function getNom() {
        return $this->Nom;
    }

    public function setAdresse($Adresse) {
        $this->Adresse = $Adresse;
    }

    public function getAdresse() {
        return $this->Adresse;
    }
}

