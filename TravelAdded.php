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
    td{
        border-style: solid;
        border-collapse: collapse;
        border-width: 1px;
    }
    </style>
</head>
<body>
    <?php
    require_once("Model/model.php");
    include_once("View/allTravel.php");

    if ((strlen($_POST["username"])<20 && (strlen($_POST["username"])>0){
        addTravel($_POST["username"]);
        echo "<p>Vous venez d'ajouter un voyage, <a href=\"addNewStep.php\">appuyez ici pour rajouter des étapes</a></p>";
    }else{
        echo "<p>Nom invalide (peut être trop long?), <a href=\"addNewStep.php\">appuyez ici pour retourner à l'étape précedentes</a></p>";
    }
    ?>
</body>
</html>