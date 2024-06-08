<?php

function islike($user,$avent)
{
    require_once 'm_recuperationDB.php';
    require 'm_connexion_bdd.php';

    $query = 'SELECT avent.* FROM avent INNER JOIN fav_avent_for_user ON fav_avent_for_user.avent_id = avent.avent_id WHERE fav_avent_for_user.avent_id = :aventID AND fav_avent_for_user.user_id = :userID';
    $argument = [[":aventID",$avent],[":userID",$user]];
    if(COUNT(queryDB($db,$query,$argument)) !== 0)
    {
        return true;
    }
    else{
        return false;
    }
}