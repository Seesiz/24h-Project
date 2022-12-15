<?php
    session_start();
    $page = "acceuil";
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="asset/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/bootstrap-5.2.2-dist/css/bootstrap.css.map">
    <link rel="stylesheet" href="style/style.css">
    <title>Airbnb</title>
</head>
<!-- Navigation -->
<header>
    <?php 
        include('inc/header.php');
    ?>
</header>
<body>
    <?php 
        if($page=="incription"){
            include('inc/Inscription.php');
        }if($page=="connexion"){
            include('inc/Connexion.php');
        }if($page=="acceuil"){
            include('inc/acceuil.php');
        }
    ?>
        
</body>
<script src="asset/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</html>