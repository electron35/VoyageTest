<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage Voyage</title>
</head>
<body>
    <?php
    require_once("Model/model.php");
    include_once("View/allTravel.php");
    function get_travel($db,$voyage)//cet fonction prend en paramètre la base de données et récupère toutes les fiches de la BDD
    {
        $query = $db->query("SELECT * FROM `etape` WHERE idTravel=".$voyage);

        return $query;
    }
    $db = getDB();

    $query = get_step_with_travel_id($db,1);
    while($new = $query->fetch(PDO::FETCH_ASSOC))
    {
        echo "<span>$new[idEtape] $new[type] $new[departure_date] </span> <br>";
    }
    $query->closeCursor();
    ?>

</body>
</html>