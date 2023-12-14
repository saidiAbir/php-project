<?php

class Salle {

    private $numS;
    private $nomC;
    private $id;

    public function __construct($numS, $nomC) {
        $this->numS = $numS;
        $this->nomC = $nomC;
        $this->id = uniqid();
    }

    public function getNumS() {
        return $this->numS;
    }

    public function setNumS($numS) {
        $this->numS = $numS;
    }

    public function getNomC() {
        return $this->nomC;
    }

    public function setNomC($nomC) {
        $this->nomC = $nomC;
    }

    public function getId() {
        return $this->id;
    }
  }