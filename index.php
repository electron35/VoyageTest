<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage Voyage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    require_once("Model/voyage.php");
    include_once("View/allTravel.php");
    ?>
    <a href="addNewTravel.php"><button>Ajouter un nouveau voyage</button></a>
    <a href="addNewStep.php"><button>Ajouter une étape à un voyage</button></a> 
</body>
</html>