<?php 



class AdminModel {
    public function AdminLog($username,$pass){
        try {
            $database = new PDO("mysql:host=localhost;dbname=electromaroc", 'root', '');
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
           
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
       
        $stmt=$database->query("select * from users where username='$username' and pass='$pass'");
        $result=$stmt->fetch();
      
        
        return $result;
    }
}
class Client {
    public function log($email,$pass){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from clients where email='$email' and pass='$pass'");
        $result=$stmt->fetch();
      
        
        return $result;
    }
}


?>