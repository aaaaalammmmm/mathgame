<?php 
    session_start();
    extract($_POST);
    
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        if ($_POST["email"] == "a@a.a" && $_POST["password"] == "aaa") {
            header("location: index.php");
        } else {
            header("location: login.php");
        }
    }     
?>