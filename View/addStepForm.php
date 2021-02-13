<td>
    <select name="travel">
        <?php
            require_once("Controller/travelController.php");
            $travelList = getTravels();
            foreach ($travelList as $key => $value) {
                echo "<option value=\"$value[idTravel]\">$value[idTravel] par $value[creator]</option>";
            }
        ?>
    </select>
</td>