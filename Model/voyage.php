<?php
//DB and PhpMyAdmin information
define("MYHOST","localhost");
define("MYDB","voyage");
define("MYUSER","root");
define("MYPASS","");

function getDB(){
    try
    {
    $db = new PDO('mysql:host='.MYHOST.';dbname='.MYDB.';charset=utf8', MYUSER,
    MYPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    }
    return $db;
}


//Get from db function
function getAllTravel($db){
    $query = $db->query("SELECT * FROM `travel`");
    return $query;
}

function get_travel_from_id($db,$voyage){
    $query = $db->query("SELECT * FROM `travel` WHERE idTravel=".$voyage);
    return $query;
}

function get_step_with_travel_id($db,$voyage){
    $query = $db->query("SELECT * FROM `etape` WHERE idTravel=".$voyage);
    return $query;
}

//Add to db function
function addTravel($db,$creator)
{
    $query= $db->query("INSERT INTO `travel` (idTravel,creator) VALUES (NULL, '$creator')");
}
function addStep($db,$idTravel,$type,$transportNumber,$departure_date,$arrival_date,$departure = NULL,$arrival = NULL,$seat = NULL,$gate = NULL,$baggage_drop = NULL)
{
    try {
        var_dump("INSERT INTO `etape` (`idEtape`, `type`, `transport_number`, `departure_date`, `arrival_date`, `departure`, `arrival`, `seat`, `gate`, `baggage_drop`, `idTravel`) VALUES (NULL, '$type', '$transportNumber', '$departure_date', '$arrival_date', '$departure', $arrival, $seat, $gate, $baggage_drop, '$idTravel')");
        $query= $db->query("INSERT INTO `etape` (`idEtape`, `type`, `transport_number`, `departure_date`, `arrival_date`, `departure`, `arrival`, `seat`, `gate`, `baggage_drop`, `idTravel`) VALUES (NULL, '$type', '$transportNumber', '$departure_date', '$arrival_date', '$departure', '$arrival', '$seat', '$gate', '$baggage_drop', $idTravel)");
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>