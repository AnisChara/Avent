<?php


function insertviews($user_id, $avent_id)
{
    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';
    
    $query = "INSERT INTO views(user_id, avent_id) VALUES (:user_id, :avent_id)";
    $argument = [[":user_id", $user_id],[":avent_id",$avent_id]];
    queryDB($db,$query,$argument);
}
