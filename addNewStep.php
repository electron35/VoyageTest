<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Voyage Voyage</title>
</head>
<body>
    <?php
        require_once("Model/voyage.php");
    ?>  
    <form action="stepAdded.php" method="post">
        <table>
            <tr>
                <td>Voyage auquel rajouter une étape: </td>
                <?php include("View/addStepForm.php")?>
            </tr>
            <tr>
                <td>Type de transport</td><td><select name="type">
                    <option value="plane">Plane</option>
                    <option value="plane">Train</option>
                    <option value="plane">Bus</option>
                    <option value="plane">Boat</option>
                
                </select>
                </td>
            </tr>
            <tr>
                <td>Numéro du transport</td><td><input type="text" name="transportnumber" maxlength="10"></td>
            </tr>
            <tr>
                <td>Date de départ</td><td> <input type="date" name="departuredate" value=""><input type="time" name="departuretime" value=""></td>
            </tr>
            <tr>
                <td>Lieu de départ</td><td><input type="text" name="departure"></td>
            </tr>
            <tr>
                <td>Date d'arrivée</td><td> <input type="date" name="arrivaldate" value=""><input type="time" name="arrivaltime" value=""></td>
            </tr>
            <tr>
                <td>Lieu d'arrivée</td><td><input type="text" name="arrival"></td>
            </tr>
            <tr>
                <td>Porte</td><td><input type="text" name="gate" placeholder="(facultatif)" maxlength="5"></td>
            </tr>
            <tr>
                <td>Siège</td><td><input type="text" name="seat" placeholder="(facultatif)" maxlength="5"></td>
            </tr>
            <tr>
                <td>Pose des baggages</td><td><input type="text" name="baggage_drop" placeholder="(facultatif)" maxlength="5"></td>
            </tr>
            <tr><td><input type="submit" value="ajouter une étape"></td></tr>
        </table>
      </form>

</body>
</html>