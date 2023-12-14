<?php
include_once('../models/Client.php');
include_once('../controllers/ClientController.php');
$id = $_POST['id'];
$controller = new ClientController();


$client = new Client();

$client->setId($_POST['id']);
$client->setPrenom($_POST['prenom']);
$client->setNom($_POST['nom']);
$client->setAge($_POST['age']);
$client->setHeight($_POST['height']);
$client->setWeight($_POST['weight']);
$client->setEmail($_POST['email']);
$client->setM2p($_POST['m2p']);


$controller->modifier_user($client);
header('Location: modifier.html');
?>