<?php 
    function PDOpostGres(){
        $host = "localhost";
        $db = "immobilier";
        $user = "postgres";
        $password = "root";
        $pdo = null;
        $dsn = "pgsql:host=$host;port=5432;dbname=$db";
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
?>