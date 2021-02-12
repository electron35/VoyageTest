<?php
    require_once("Model/model.php");

    
    function get_all_travel_and_step(){
        $db = get_db();
        $query = get_all_travel($db);
        $all_travel=array();
        
        while($new = $query->fetch(PDO::FETCH_ASSOC))
        {
            $travel_tab["travel"] = $new['idTravel'];
            $step_query = get_step_with_travel_id($db,$new['idTravel']);
            $travel_tab["step"] = array();
            $array;
            while($step_new = $step_query->fetch(PDO::FETCH_ASSOC))
            {
                //$array["id"] = $step_new['idEtape'];
                $array["type"] = $step_new['type'];
                $array["transport_number"] = $step_new['transport_number'];
                $array["departure_date"] = $step_new['departure_date'];
                $array["arrival_date"] = $step_new['arrival_date'];
                $array["departure"] = $step_new['departure'];
                $array["arrival"] = $step_new['arrival'];
                $array["gate"] = $step_new['gate'];
                $array["seat"] = $step_new['seat'];
                $array["baggage_drop"] = $step_new['baggage_drop'];

                array_push($travel_tab["step"], $array);
            }
            var_dump($array);
            $step_query->closeCursor();
            

            array_push($all_travel, $travel_tab);
        }
        $query->closeCursor();

        return $all_travel;
    }
    
?>