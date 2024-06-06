<?php

function get_theme() {
    
    require "m_connexion_bdd.php";

    $requete = $db->prepare("SELECT theme_name FROM theme");
    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $resultat;

}