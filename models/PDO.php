<?php
class PDO{
  private $_db; // Instance de PDO.

  public function __construct(){
    try {
        $db = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
        $this->setDb($db);
    } catch (Exception $e) {
        echo "Problème de connexion à la base de donnée !";
        echo "$e";
        die();
    }
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function getProducts(){
      $sth = $this->_db->query("select * from Products");
      $resultat = $sth->fetchAll();
      return $resultat;
  }
}

?>