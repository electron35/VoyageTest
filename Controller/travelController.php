<?php
    function getTravels()
    {
        require_once("Model/voyage.php");
        $db = getDB();
        $query = getAllTravel($db);
        $travel = array();
        while($new = $query->fetch(PDO::FETCH_ASSOC)){
            array_push($travel, array('idTravel' => $new['idTravel'] , 'creator' => $new['creator']));
        }
        return $travel;
    }
?>