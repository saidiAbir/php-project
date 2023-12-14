<?php

class employee {

    private $id;
    private $nom;
    private $prenom;
    private $tache;
    private $salaire;
    private $m2p ;

    public function __construct($id, $nom, $prenom, $tache, $salaire,$m2p) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tache = $tache;
        $this->salaire = $salaire;
        $this->m2p =$m2p;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setTache($tache) {
        $this->tache = $tache;
    }

    public function getTache() {
        return $this->tache;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function getSalaire() {
        return $this->salaire;
    }
    public function setm2p($m2p) {
        $this->m2p = $m2p;
    }

    public function getm2p() {
        return $this->m2p;
    }
}

