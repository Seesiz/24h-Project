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
?>