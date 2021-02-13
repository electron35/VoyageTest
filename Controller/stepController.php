<?php
require_once("Model/model.php");
function verify($var,$intendedSize=0)
{
    if (!is_null($var)) {
        return true;
    }
    if ((strlen($var)>0) && (strlen($var)<$intendedSize)) {
        return true;
    }
    return false;
}

function addNewStep($idTravel,$type,$transportNumber,$departure_date,$arrival_date,$departure = NULL,$arrival = NULL,$seat = NULL,$gate = NULL,$baggage_drop = NULL)
{
    verify
}
?>