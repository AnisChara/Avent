<?php


function get_user_pseudo($user_id)
{
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';

    $requete = "SELECT pseudo FROM user WHERE user_id = :user_id";
    $argument = [[":user_id", $user_id]];

    $id = queryDB($db, $requete, $argument);

    return $id[0]["pseudo"];
}


