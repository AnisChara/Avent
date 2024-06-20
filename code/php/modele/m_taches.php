<?php


function recuperer_toutes_les_taches($avent_id) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("SELECT * FROM task WHERE avent_id = ?;");
    $requete->execute(array($avent_id));
    $resultat = $requete->fetchAll();
    return $resultat;
}

function ajouter_tache($content, $avent_id) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("INSERT INTO task(content,avent_id) VALUES (?,?)");
    $requete->execute(array($content, $avent_id));
    $resultat = $requete->fetchAll();
    return $resultat;
}

function fin_tache($task_id, $finisseur) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("UPDATE task SET finisseur =? WHERE task_id =? AND finisseur IS NULL");
    $requete->execute(array($finisseur, $task_id));
    $resultat = $requete->fetchAll();
    return $resultat;
}
function nofin_tache($task_id, $finisseur) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare(" ALTER TABLE task SET finisseur = NULL WHERE task_id =? AND finisseur IS NOT NULL");
    $requete->execute(array($finisseur, $task_id));
    $resultat = $requete->fetchAll();
    return $resultat;
}

function supprimer_tache($task_id) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("DELETE FROM task WHERE task_id =?");
    $requete->execute(array($task_id));
    $resultat = $requete->fetchAll();
    return $resultat;
}