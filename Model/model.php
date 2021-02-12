<?php
//information sur la BDD et PhpMyAdmin
define("MYHOST","localhost");
define("MYDB","voyage");
define("MYUSER","root");
define("MYPASS","");

function get_db(){
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

function get_all_travel($db){
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
?>