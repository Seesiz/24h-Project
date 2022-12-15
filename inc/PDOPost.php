<?php 
    function PDOpostGres(){
        $host = "localhost";
        $db = "RentalHabitation";
        $user = "postgres";
        $password = "root";
        $pdo = null;
        try{
            $dsn = "pgsql:host=$host;port=5432;dbname=$db";
            $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }catch(PDOException $e){
            die($e->getMessage());
        }
        return $pdo;
    }
?>