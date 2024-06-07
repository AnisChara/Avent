<?php
function recuperer_avent_inscrit_user($user_id) {
    require_once 'm_recuperationDB.php';
    require 'm_connexion_bdd.php';
    $query = "SELECT avent.* FROM  inscrit INNER JOIN avent ON inscrit.avent_id = avent.avent_id WHERE user_id = :user_id AND avent.date_fin > NOW() ORDER BY date_inscription DESC";
    $argument = [[':user_id',$user_id]];
    return queryDB($db,$query,$argument);
}