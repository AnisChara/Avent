<?php
function recuperer_info_user() {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT * FROM user");
    $requete->execute();
    $resultat = $requete;
    return $resultat;
}