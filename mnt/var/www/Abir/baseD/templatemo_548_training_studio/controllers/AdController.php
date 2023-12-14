<?php
include_once('../models/Admin.php');
include_once('../database/config.php');

class AdminController extends Connexion
{
  public function __construct()
  {
    parent::__construct();
  }

  public function insert(Admin $a)
  {
    $query = "INSERT INTO admin (matricule, m2p, nom, adresse) 
                   VALUES(?, ?, ?, ?)";

    $res = $this->pdo->prepare($query);
    $aryy = array(
      $a->getMatricule(),
      $a->getM2p(),
      $a->getNom(),
      $a->getAdresse(),
    );

    return $res->execute($aryy);
  }

  public function getAdmin($matricule)
  {
    $query = "SELECT * FROM admin WHERE matricule= ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($matricule));
    return $res->fetch();
  }

  public function delete($matricule)
  {
    $query = "DELETE FROM admin WHERE matricule = ?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($matricule));
  }

  public function liste()
  {
    $query = "SELECT * FROM admin";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }

  public function modifier_user(Admin $a)
  {
    $sql = "UPDATE admin SET m2p=?, nom=?, adresse=? 
                WHERE matricule=?";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array(
      $a->getMatricule(),
      $a->getM2p(),
      $a->getNom(),
      $a->getAdresse(),
    ));
  }
  function rechercherADMIN($adresse, $mdp)
  {
    $query = "select * from admin where adresse = '$adresse' and m2p = '$mdp'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }

}
