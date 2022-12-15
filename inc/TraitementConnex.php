<?php
    require "PDOPost.php";
    include("function.php");
    $connection = PDOpostGres();
    $client = getUser($connection, $_POST["email"], $_POST['psw']);
    if(count($client)==0){
        header("location: ../index.php?page=connexion");
    }else{
        session_start();
        $name = $client[0]["nom"] ;
        $_SESSION["name"] = $name;
        $mail = $client[0]["email"] ;
        $_SESSION["email"] = $mail;
        $password = $client[0]["mdp"];
        $_SESSION["password"] = $password; 
        $tel = $client[0]["tel"];
        $_SESSION["tel"] = $tel;
        $_SESSION["client"] = $client[0]["id"];
        header("location: ../index.php");
    }
?>