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
	
	public function deleteBasket($id){
		$data = [
            'id' => $id
        ];
        $sql = "DELETE FROM Basket WHERE customer= :id";
        $stmt= $this->_db->prepare($sql);
        $stmt->execute($data);
	}
	
    public function AddToBasket($customer, $product, $quantity){
        $data = [
            'customer' => $customer,
            'product' => $product,
            'quantity' => $quantity
        ];
        $sql = "INSERT INTO Basket VALUES (:customer, :product, :quantity)";
        $stmt= $this->_db->prepare($sql);
        $stmt->execute($data);
    }

    public function getProducts(){
        $sth = $this->_db->query("select * from Products");
        $resultat = $sth->fetchAll();
        return $resultat;
    }

    public function getNextId($table){
        $sth = $this->_db->query('SELECT max(id)+1 from '.$table);
        $resultat = $sth->fetch();
        // $sth->debugDumpParams();
        return $resultat[0];
    }


    public function createUser($firstname, $familyname, $address, $username, $password){
        if($this->checkUsernameExist($username)){
            return false;
        }else{
            $password= password_hash($password, PASSWORD_DEFAULT);
            $id=$this->getNextId("User");
            $data = [
                'id' => $id,
                'firstname' => $firstname,
                'familyname' => $familyname,
                'address' => $address,
                'username' => $username,
                'password' => $password
            ];
            $sql = "INSERT INTO User VALUES (:id, :firstname, :familyname, :address, :username, :password)";
            $stmt= $this->_db->prepare($sql);
            $stmt->execute($data);
        }
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
        if (strcasecmp($resultat["username"],$username)==0) {
            return true;
        }else {
            return false;
        }
    }

    public function getHashPassword($username){
        $sth = $this->_db->query('SELECT password from Customers where username="'.$username.'"');
        $resultat = $sth->fetch();
        // $sth->debugDumpParams();
        return $resultat["password"];
    }

    public function getCustomerID($username){
        $query='SELECT id from Customers where username = "'.$username.'"';
        $sth = $this->_db->query($query);
        $result= $sth->fetch();
        return $result["id"];
    }

    public function getBasket($id){
        $query='SELECT * from Basket where customer="'.$id.'"';
        $sth = $this->_db->query($query);
        $result= $sth->fetchAll();
        return $result;
    }

    public function getProductById($id){
        $sql="SELECT * FROM Products WHERE id=:id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

}

?>
