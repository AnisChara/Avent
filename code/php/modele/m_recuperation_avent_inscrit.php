<?php
function recuperer_avent_inscrit_user($user_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT avent_id FROM  inscrit WHERE user_id = ?");
    $requete->execute(array($user_id));
    $resultat = $requete;
    return $resultat;
}