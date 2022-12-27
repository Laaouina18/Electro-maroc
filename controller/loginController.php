<?php 
$link = "assets/css/style.css";

if(isset($_POST['submit'])){
    // printDump($_POST);
if ($_POST['email']=="mehdi@gmail.com" && $_POST['password']=="nouha") {
    header("Location: /home");
    session_start();
    $_SESSION["email"] = $_POST['email'];

}
include "../view/login.view.php";
die();
}


include "../view/login.view.php";
?>