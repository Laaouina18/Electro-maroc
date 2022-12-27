<?php 

class Database{
    
    public $conn ;

    public function __construct()
    {
        try {
            $dsn = 'mysql:host=localhost;port=3306;dbname=pr';
            $this->conn = new PDO($dsn, 'root', '');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
        
    }
    
}



?>