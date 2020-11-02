<?php
class DataBase{
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

    public function checkConnexion($username,$password){
        //{$username,$password}==> TRUE/FALSE
        if($this->checkUsernameExist($username)){
            return password_verify ( $password , $this->getHashPassword($username));
        }else{
            return false;
        }
    }

    public function checkUsernameExist($username){
        $query='SELECT username from Customers where username="'. $username.'"';
        $sth = $this->_db->query($query);
        $resultat = $sth->fetch();
        return $resultat["username"];
        if (strcasecmp($resultat["username"],$username)==0) {
            return true;
        }else {
            return false;
        }
    }

    public function getHashPassword($username){
        $sth = $this->_db->query('SELECT password from Customers where username="'. $username.'"');
        $resultat = $sth->fetch();
        // $sth->debugDumpParams();
        return $resultat["password"];
    }
  
  

}

?>
