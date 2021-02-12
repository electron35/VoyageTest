<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage Voyage</title>
    <style>
    table
    {
        border-style: solid;
        border-collapse: collapse;
        margin: 5px;
    }
    td
    {
        border-style: solid;
        border-collapse: collapse;
        border-width: 1px;
    }
    </style>
</head>
<body>
    <?php
        require_once("Model/model.php");
    ?>  
    <form action="stepAdded.php" method="post">
        <table>
            <tr>
                <td>Voyage auquel rajouter une étape: </td>
                <?php include("View/addStepForm.php")?>
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
                <td>Porte</td><td><input type="text" name="gate"></td>
            </tr>
            <tr>
                <td>Siège</td><td><input type="text" name="seat"></td>
            </tr>
            <tr>
                <td>Pose des baggages</td><td><input type="text" name="baggage_drop"></td>
            </tr>
            <tr><td><input type="submit" value="ajouter une étape"></td></tr>
        </table>
      </form>

</body>
</html>