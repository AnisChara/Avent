<?php


function get_avent_id($nom)
{
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';

    $requete = "SELECT avent_id FROM avent WHERE nom = :nom";
    $argument = [[":nom", $nom]];

    $id = queryDB($db, $requete, $argument);

    return $id[0]["avent_id"];
}
