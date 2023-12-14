<?php

include_once('../models/Client.php');
include_once('../controllers/ClientController.php');

$cin = $_POST["cin"];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$email = $_POST['email'];
$m2p = $_POST['m2p'];
$age = $_POST["age"];
$controller = new ClientController();
$client = new Client($cin,  $prenom, $nom, $age, $height, $weight, $email, $m2p);
$rechercherclient = $controller->rechercherclient($email, $m2p)->rowCount();
if ($rechercherclient == 1) {
  header("refresh:0.1 ;url = ajout.html");

  echo "<script>alert('deja existe !!! ')</script>";
} else {
  $res = $controller->insert($client);

  header("refresh:0.1 ;url = ajout.html");
}
