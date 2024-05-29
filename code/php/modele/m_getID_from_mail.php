<?php


function get_userID($email)
{
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';

    $requete = "SELECT user_id FROM user WHERE email = :email";
    $argument = [[":email", $email]];

    $id = queryDB($db, $requete, $argument);

    return $id[0]["user_id"];
}


