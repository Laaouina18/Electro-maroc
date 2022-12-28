<?php 

require_once 'connection.php';
class AdminModel {
    public function AdminLog($username,$pass){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from users where username='$username' and pass='$pass'");
        $result=$stmt->fetch();
      
        
        return $result;
    }
}


?>