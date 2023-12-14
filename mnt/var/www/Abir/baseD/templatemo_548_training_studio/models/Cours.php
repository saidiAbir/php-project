<?php

class Cours {

    private $nomC;
    private $idCoach;
    private $nom;
    private $Duree;
    private $heureD;
    private $Prix;

    public function __construct($nomC, $idCoach,$nom, $Duree, $heureD, $Prix) {
        $this->nomC = $nomC;
        $this->idCoach = $idCoach;
        $this->Duree = $Duree;
        $this->heureD = $heureD;
        $this->Prix = $Prix;
    }

    public function setNomC($nomC) {
        $this->nomC = $nomC;
    }

    public function getNomC() {
        return $this->nomC;
    }

    public function setIdCoach($idCoach) {
        $this->idCoach = $idCoach;
    }

    public function getIdCoach() {
        return $this->idCoach;
    }

    public function setDuree($Duree) {
        $this->Duree = $Duree;
    }

    public function getDuree() {
        return $this->Duree;
    }

    public function setHeureD($heureD) {
        $this->heureD = $heureD;
    }

    public function getHeureD() {
        return $this->heureD;
    }

    public function setPrix($Prix) {
        $this->Prix = $Prix;
    }

    public function getPrix() {
        return $this->Prix;
    }
    public function setNom(){
        return $this->nom;
    }
    public function getNom() {
        return $this->nom;
    }
}

