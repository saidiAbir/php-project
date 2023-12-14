<?php
include_once('../admin-side/ajout.php');
include_once('../controllers/AdController.php');

$matricule = $_POST["matricule"];
$nom = $_POST['nom'];
$m2p = $_POST['m2p'];
$adresse = $_POST['adresse'];
$controller = new AdminController();
$Admin = new Admin($matricule, $nom, $m2p,  $adresse);
$rechercherclient = $controller->rechercherADMIN($adresse, $mdp)->rowCount();
if ($rechercherclient == 1) {
  header("refresh:0.1 ;url = ajout.html");

  echo "<script>alert('deja existe !!! ')</script>";
} else {
  $res = $controller->insert($Admin);

  header("refresh:0.1 ;url = ajout.html");
}
