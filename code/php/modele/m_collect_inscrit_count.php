<?php

function get_inscrit_count($avent_id)
{
    require "m_connexion_bdd.php";

    $requete = $db->prepare("SELECT COUNT(*) FROM avent JOIN inscrit ON avent.avent_id = inscrit.avent_id WHERE avent.avent_id = :avent_id;");
    $requete->execute(array(':avent_id' => $avent_id));
    $result = $requete->fetchAll();

    return $result[0][0];
    
}