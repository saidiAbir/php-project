<?php
include_once('../models/Client.php');
include_once('../controllers/ClientController.php');
$id=$_POST['id'];
$controller= new ClientController();
$client = $controller-> getClient($id);

$l=$client;
echo'
<link rel="stylesheet" href="css/log.css">
<img style="background-image: url("schedule-bg.jpg");"></img>
<form action="modif.php" method="post">
<div class="wrapper">

    </label><input type="hidden" name="id" value='.$l[0].'><br><br>
  <label for="">Prenom : </label><input type="text" name="prenom" value='.$l[1].'><br><br>
  <label for="">Nom : </label><input type="text" name="nom" value='.$l[2].'><br><br>
  <label for="">Age : </label><input type="text" name="age" value='.$l[3].'><br><br>
  <label for="">Height : </label><input type="text" name="height" value='.$l[4].'><br><br>
  <label for="">Weight : </label><input type="text" name="weight" value='.$l[5].'><br><br>
  <label for="">Email : </label><input type="text" name="email" value='.$l[5].'><br><br>
  <label for="">m2p : </label><input type="text" name="m2p" value='.$l[5].'><br><br>


  <button type="submit" value="">modifier</button>
  </div>
</form>
';