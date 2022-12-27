<?php

function getUri(){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    die();
}

function printDump($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function sessionSet($key,$value){
    session_start();
    $session[$key] = $value;
}
?>


