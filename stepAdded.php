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

    function verify($varToTest,$intendedSize)
    {
        return ((strlen($varToTest)>0) && (strlen($varToTest)<$intendedSize)) ? $varToTest : NULL;
    }

    
    $departure_date = date_format(date_create($_POST['departuredate'].$_POST['departuretime']),"Y/m/d H:i:s");

    $arrival_date = date_format(date_create($_POST['arrivaldate'].$_POST['arrivaltime']),"Y/m/d H:i:s");
    //($db,$idTravel,$type,$transportNumber,$departure_date,$arrival_date,$departure = NULL,$arrival = NULL,$seat = NULL,$gate = NULL,$baggage_drop = NULL)

    addStep(getDB(),$_POST['travel'],
                    $_POST['type'],
                    verify($_POST['transportnumber'],10),
                    $departure_date,$arrival_date,
                    verify($_POST['departure'],20),
                    verify($_POST['arrival'],20),
                    verify($_POST['seat'],5),
                    verify($_POST['gate'],5),
                    verify($_POST['baggage_drop'],5));
    ?>
    <a href="index.php"><button>retourner au menu principal</button></a>

</body>
</html>