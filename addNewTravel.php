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
    <form action="TravelAdded.php" method="post">
        <p> Bienvenue sur le formulaire pour rajouter un voyage, veuillez d'abbord entrez votre nom </p>
        <table>
            <tr>
                <td>Votre nom: </td><td> <input type="text" name="username" value=""></td>
            </tr>
            <tr><td><input type="submit"></td></tr>
        </table>
      </form>

</body>
</html>