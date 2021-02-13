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