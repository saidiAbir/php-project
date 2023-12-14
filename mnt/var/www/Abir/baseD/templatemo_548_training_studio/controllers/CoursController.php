<?php
include_once('../models/Cours.php');
include_once('../database/config.php');
class CoursController extends Connexion
{
  function __construct()
  {
    parent::__construct();
  }

  function insert(Cours $co)
  {

    $query = "INSERT into cours( numC,nomC,idCoach,heureD,duree,prix)values(?, ?, ?, ?,?,?)";
    $res = $this->pdo->prepare($query);

    $aryy = array($co->getNomC(), $co->getIdCoach(), $co->getDuree());
    //var_dump($aryy);
    return $res->execute($aryy);
  }

  function getCours($nomC)
  {
    $query = "SELECT * FROM cours WHERE numC=? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($nomC));
    $array = $res->fetch();
    return $array;
  }
  function delete($nomC)
  {
    $query = "DELETE from cours where numC=?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($nomC));
  }
  function liste()
  {
    $query = "SELECT * from cours";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }
  function modifier_Cours(Cours $co)
  {
    $sql = "UPDATE cours SET nomC=? , idCoach=?,duree=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($co->getNomC(), $co->getIdCoach(), $co->getDuree()));
  }
  function rechercheCours($critere, $valeur)
  {
    if ($critere == '$nomC') {
      $query = "SELECT * from cours where nomC='" . $valeur . "'";
    } else {

      $query = "SELECT * from cours where duree='" . $valeur . "'";
    }

    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }
}
