<?php
function recuperer_info_user($user_id) {
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';
    
    $query = 'SELECT * FROM user WHERE user_id = :user_id';
    $argument = [[':user_id',$user_id]];
    $requete = queryDB($db,$query,$argument);

    return $requete[0]; //$expect;
}