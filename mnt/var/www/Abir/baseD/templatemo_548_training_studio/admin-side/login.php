<?php
$email=$_POST['email'];
$m2p=$_POST['m2p'];
include_once("../controllers/ClientController.php");
$controller = new ClientController();
$res = $controller->rechercherclient($email,$m2p)->rowCount();
if ($res == 1){
header("refresh:0.1 ;url = index_salle.html");

}else{
header("refresh:0.1 ;url = index.html");
echo "<script>alert('woring  password incorrect !!! ')</script>";

}

?>
