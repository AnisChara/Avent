<?php
function recuperer_info_user($user_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT * FROM user WHERE user_id = ?");
    $requete->execute($user_id);
    $resultat = $requete;
    return $resultat;
}