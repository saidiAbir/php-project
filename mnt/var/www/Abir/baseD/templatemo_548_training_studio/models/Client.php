<?php

class Client {
private $id,$prenom,$nom,$age,$height,$weight,$email,$m2p;
function __construct($id="",$prenom="",$nom="",$age="",$height="",$weight="",$email="",$m2p="") {
	
    $this->id=$id;
    $this->prenom=$prenom;
    $this->nom=$nom;
    $this->age=$age;
    $this->height=$height;
    $this->weight=$weight;
    $this->email=$email;
    $this->m2p=$m2p;
}

public function getid(){
	return $this->id;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getAge(){
	return $this->age;
}
public function getHeight(){
  return $this->height;
}
public function getWeight(){
  return $this->weight;
}
public function getEmail(){
  return $this->email;
}
public function getm2p(){
  return $this->m2p;
}
public function setId($id) {
  $this->id = $id;
}

public function setPrenom($prenom) {
  $this->prenom = $prenom;
}

public function setNom($nom) {
  $this->nom = $nom;
}

public function setAge($age) {
  $this->age = $age;
}

public function setHeight($height) {
  $this->height = $height;
}

public function setWeight($weight) {
  $this->weight = $weight;
}

public function setEmail($email) {
  $this->email = $email;
}

public function setM2p($m2p) {
  $this->m2p = $m2p;
}
}

?>