<?php 

include_once("../Model/usersModel.php");
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $user=new AdminModel();
    $user=$user->AdminLog($email, $pass);

    $client = new Client;
    $client = $client->log($email,$pass);
    if ($user) {
        $_SESSION["user"] = $user;
        header("location: /home");
    }
        elseif ($client) {
                $_SESSION["client"]=$client;
        
                header("location: /home");
            }
            echo "<pre>";
            print_r($_SESSION); 
            echo "</pre>";
        }
    



include_once("../view/login.view.php");

?>