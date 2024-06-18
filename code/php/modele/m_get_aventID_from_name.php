<?php


function get_avent_id($nom,$date_debut,$date_fin)
{
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';

    $requete = "SELECT avent_id FROM avent WHERE nom = :nom AND date_debut = :date_debut AND date_fin = :date_fin";
    $argument = [[":nom", $nom],[":date_debut", $date_debut],[":date_fin", $date_fin]];

    $id = queryDB($db, $requete, $argument);

    return $id[0]["avent_id"];
}
