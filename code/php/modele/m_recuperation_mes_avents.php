<?php
function recuperer_mes_avents($user_id) {
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';
    $query = 'SELECT * FROM avent WHERE createur = :id';
    $argument = [[':id',$user_id]];
    $resultat = queryDB($db,$query,$argument);
    return $resultat;
}