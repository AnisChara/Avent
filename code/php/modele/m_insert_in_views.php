<?php


function insertviews($user_id, $avent_id)
{
    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    $argument = [[":user_id", $user_id],[":avent_id",$avent_id]];
    $query = "SELECT * FROM views WHERE user_id = :user_id AND avent_id = :avent_id";
    
    if(COUNT(queryDB($db,$query,$argument)) == 0)
    {
        $query = "INSERT INTO views(user_id, avent_id) VALUES (:user_id, :avent_id)";
        queryDB($db,$query,$argument);
    }
}
