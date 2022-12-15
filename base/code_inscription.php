<?php
    include "../base/PDO.php" ;
    if (isset($_POST['submit'])){
      if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["password"]) && !empty($_POST["password"]) && isset($_POST["tel"]) && !empty($_POST["tel"])  ){
        if ($bdd ) {
          
          $name = $_POST["name"] ;
          $_SESSION["name"] = $name;
          $mail = $_POST["mail"] ;
          $_SESSION["email"] = $mail;
          $password = $_POST["password"] ;
          $_SESSION["password"] = $password; 
           $tel = $_POST["tel"] ;
          $_SESSION["tel"] = $tel;
          try{
            $connection->query("INSERT INTO client(idclient, nom, mdp, email, tel, date_arriver, date_depart) VALUES(".$.",".$name.",'".$password."','".$mail."','".$tel."','".null."','".null."')");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
         
        }   
        else{
          echo "not connected" ;
        }
         
          
         
    }
    else{
          echo "Error one or many cases is empty or not completed";
    }
         
        
        
    
    }
     
?>