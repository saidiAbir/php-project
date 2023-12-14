<?php
include_once('../models/employee.php');
include_once('../database/config.php');
class EmployeeController extends Connexion
{
  function __construct()
  {
    parent::__construct();
  }

  function insert(employee $e)
  {

    $query = "INSERT into employee(id , nom , prenom , tache , salaire,m2p)values(?, ?, ?, ?,?,?)";
    $res = $this->pdo->prepare($query);

$aryy =array($e->getId(),$e->getPrenom(),$e->getNom(),$e->getTache(),$e->getSalaire(),$e->getm2p()) ;
//var_dump($aryy);
return $res->execute($aryy);

  }

  function getEmployee($id)
  {
    $query = "SELECT * FROM employee WHERE id = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array = $res->fetch();
    return $array;
  }
  function delete($id)
  {
    $query = "DELETE from employee where id=?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($id));
  }
  function liste()
  {
    $query = "SELECT * from employee";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }
  function modifier_user(employee $e)
  {
    $sql = "UPDATE employee SET id=? nom=?, prenom=?, tache=? , salaire =? , m2p=? WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($e->getId(),$e->getPrenom(),$e->getNom(),$e->getTache(),$e->getSalaire(),$e->getm2p()));
  }
}
?>
