<?php
include_once('../models/Client.php');
include_once('../database/config.php');
class ClientController extends Connexion
{
  function __construct()
  {
    parent::__construct();
  }

  function insert(Client $c)
  {

    $query = "insert into  client( id,prenom,nom,age,height,weight , email, m2p)values(?, ?, ?, ?,?,?,?,?)";
    $res = $this->pdo->prepare($query);

    $aryy = array($c->getId(), $c->getPrenom(), $c->getNom(), $c->getAge(), $c->getHeight(), $c->getWeight(), $c->getEMail(), $c->getm2p());
    //var_dump($aryy);
    $res->execute($aryy);
    return $res;
  }

  function getClient($id)
  {
    $query = "SELECT * FROM client WHERE id=? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array = $res->fetch();
    return $array;
  }
  function delete($id)
  {
    $query = "DELETE from client where id=?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($id));
  }
  function liste()
  {
    $query = "SELECT * from client";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }
  function modifier_user(Client $c)
  {
    $sql = "update client SET  prenom= ? ,nom= ?,age=?,height=?,weight=?, email=? , m2p=? WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array( $c->getPrenom(), $c->getNom(), $c->getAge(), $c->getHeight(), $c->getWeight(), $c->getEMail(), $c->getm2p(),$c->getId()));
  }
  function rechercherclient($email, $mdp)
  {
    $query = "select * from client where email = '$email' and m2p = '$mdp'";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
  }
}
