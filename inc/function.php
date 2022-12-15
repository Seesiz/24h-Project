<?php 
    function getSequence($connection){
        $data = $connection->query("SELECT nextval('idclient') AS val");
        $rows = $data->fetchAll();
        $result = array();
        foreach($rows as $row) {
            $i = array("id"=>$row['val']);
            $result[]=$i;
        }
        return $result;
    }

    function getAllHabitat($connection){
        $data = $connection->query("SELECT * FROM habitation");
        $rows = $data->fetchAll();
        $result = array();
        foreach($rows as $row) {
            $i = array("id"=>$row['idhabitation'], "type"=>$row['type_habitation'], "nbrChambre"=>$row['nombre_de_chambres'], "loyer"=>$row['loyer_par_jour'], "photo"=>$row['photo'], "quartier"=>$row['quartier'], "description"=>$row['description']);
            $result[]=$i;
        }
        return $result;
    }

    function getUser($connection, $user, $mdp){
        $data = $connection->query("SELECT * FROM client WHERE email='".$user."' AND mdp='".$mdp."'");
        $rows = $data->fetchAll();
        $result = array();
        foreach($rows as $row) {
            $i = array("id"=>$row['idclient'], "nom"=>$row['nom'], "mdp"=>$row['mdp'], "email"=>$row['email'], "tel"=>$row['tel']);
            $result[]=$i;
        }
        return $result;
    }
?>