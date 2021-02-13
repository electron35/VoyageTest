<?php
    require_once("Model/voyage.php");
    
    function getAllTravelAndStep(){//turn the query from voyage into an associative array
        $db = getDB();
        $query = getAllTravel($db);
        $allTravel=array();
        
        while($new = $query->fetch(PDO::FETCH_ASSOC))
        {
            $travelTab["travel"] = $new['idTravel'];
            $stepQuery = get_step_with_travel_id($db,$new['idTravel']);
            $travelTab["step"] = array();
            $array;
            while($step_new = $stepQuery->fetch(PDO::FETCH_ASSOC))
            {
                $array["type"] = $step_new['type'];
                $array["transport_number"] = $step_new['transport_number'];
                $array["departure_date"] = $step_new['departure_date'];
                $array["arrival_date"] = $step_new['arrival_date'];
                $array["departure"] = $step_new['departure'];
                $array["arrival"] = $step_new['arrival'];
                $array["gate"] = $step_new['gate'];
                $array["seat"] = $step_new['seat'];
                $array["baggage_drop"] = $step_new['baggage_drop'];

                array_push($travelTab["step"], $array);
            }
            $stepQuery->closeCursor();
            

            array_push($allTravel, $travelTab);
        }
        $query->closeCursor();

        return $allTravel;
    }
    
?>