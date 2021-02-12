<?php
    require_once("Controller/travelListController.php");
    $tab = getAllTravelAndStep();
    
    for ($i=0; $i < count($tab); $i++) {
        echo "<table>";
        foreach ($tab[$i] as $key => $value) {
            if (is_array($value)){
                for($j=0; $j < count($value); $j++){
                    echo "<td colspan=2> étape ".($j+1)." </td>";
                    foreach ($value[$j] as $stepKey => $stepValue) {
                        echo "<tr><td>".$stepKey."</td> <td>".($stepValue==null ? 'aucun' : $stepValue)."</td></tr>";
                    }
                }
            }else{
                echo "<tr> <th colspan=2>Voyage n°".$value."</th></tr>";
            }

        }
        echo "</table>";
    }
    
    
?>