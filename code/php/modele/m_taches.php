<?php

function recuperer_toutes_les_taches() {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("SELECT * FROM task;");
    $requete->execute();
    $resultat = $requete->fetchAll();
    return $resultat;
}

function ajouter_tache($description) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("INSERT INTO task(description) VALUES (?);");
    $requete->execute(array($description));
    $resultat = $requete->fetch();
    return $resultat;
}

function supprimer_tache($id) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("DELETE FROM task WHERE id = ?");
    $requete->execute(array($id));
    $resultat = $requete->fetch();
    return $resultat;
}
