<?php
function recuperer_mes_avents($user_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT * FROM avent WHERE createur = ?");
    $requete->execute(array($user_id));
    $resultat = $requete;
    return $resultat;
}