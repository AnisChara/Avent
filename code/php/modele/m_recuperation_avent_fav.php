<?php
function recuperer_avent_fav_user($user_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT avent_id FROM  fav_avent_for_user WHERE user_id = ?");
    $requete->execute(array($user_id));
    $resultat = $requete;
    return $resultat;
}