<?php
include_once('../controllers/CoursController.php');

$numC = $_POST["numC"];
$nomC = $_POST['nomC'];
$nom = $_POST['nom'];
$heureD = $_POST['heureD'];
$duree = $_POST['duree'];
$prix = $_POST['prix'];

$controller = new CoursController();
$Cours = new Cours($numC,$nomC,$nom,$heureD,$duree,$prix);

$res = $controller->insert($Cours);
?>
