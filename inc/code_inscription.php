<?php
    require "PDOPost.php";
    include("function.php");
    if (isset($_POST['submit'])){
        if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["password"]) && !empty($_POST["password"]) && isset($_POST["tel"]) && !empty($_POST["tel"])){
            session_start();
            $name = $_POST["name"] ;
            $_SESSION["name"] = $name;
            $mail = $_POST["mail"] ;
            $_SESSION["email"] = $mail;
            $password = $_POST["password"];
            $_SESSION["password"] = $password; 
            $tel = $_POST["tel"];
            $_SESSION["tel"] = $tel;
            $connection = PDOpostGres();
            $seq = getSequence($connection);
            echo $name;
            try{
                $connection->query("INSERT INTO client(idclient, nom, mdp, email, tel) VALUES(".$seq[0]["id"].",'".$name."','".$password."','".$mail."','".$tel."')");
                $_SESSION["client"] = $seq[0]["id"];
                header("location: ../index.php");
            }catch(PDOException $e){
                echo $e->getMessage();
        }       
        }else{
            echo "not connected" ;
        }
    }
    else{
        echo "Error one or many cases is empty or not completed";
    }   
        
?>