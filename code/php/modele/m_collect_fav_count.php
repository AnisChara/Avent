<?php

function get_fav_count($avent_id)
{
    require "m_connexion_bdd.php";

    $requete = $db->prepare("SELECT COUNT(*) FROM avent JOIN fav_avent_for_user ON avent.avent_id = fav_avent_for_user.avent_id WHERE avent.avent_id = :avent_id;");
    $requete->execute(array(':avent_id' => $avent_id));
    $result = $requete->fetchAll();

    return $result[0][0];
    
}