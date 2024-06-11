<?php
function recuperer_avent_fav_user($user_id) {
    require_once "m_recuperationDB.php";
    require 'm_connexion_bdd.php';

    $query = "SELECT avent.* FROM  fav_avent_for_user INNER JOIN avent ON fav_avent_for_user.avent_id = avent.avent_id WHERE user_id = :user_id AND avent.date_fin > NOW() ORDER BY fav_avent_for_user.date_fav DESC";
    $argument = [[':user_id',$user_id]];
    return queryDB($db,$query,$argument);
}