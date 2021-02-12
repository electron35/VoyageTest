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

    $departure_date = date_create($_POST['departuredate'].$_POST['departuretime']);
    $arrival_date = date_create($_POST['arrivaldate'].$_POST['arrivaltime']);

    var_dump($departure_date);
    var_dump($arrival_date);
    ?>  

</body>
</html>