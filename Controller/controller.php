<?php
    require_once("Model/model.php");

    
    function get_all_travel_and_step(){
        $db = get_db();
        $query = get_all_travel($db);
        
        while($new = $query->fetch(PDO::FETCH_ASSOC))
        {
            $traveltab["travel"] = "voyage numéro: $new[idTravel]";
            $stepquery = get_step_with_travel_id($db,$new[idTravel]);
            
            $array;
            while($stepnew = $query->fetch(PDO::FETCH_ASSOC)){
                $array["idStep"] = $stepnew['idEtape'];
                $array["type"] = $stepnew['type'];
            }
            $stepquery->closeCursor();
            $traveltab["step"] = $array;

        }
        $query->closeCursor();

        return $traveltab;
    }
    
?>