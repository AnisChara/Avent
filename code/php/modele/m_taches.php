<?php
function recuperer_toutes_les_taches() {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT * FROM task;");
    $requete->execute();
    $resultat = $requete->fetchAll();
    return $resultat;
}

function ajouter_tache($content, $avent_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("INSERT INTO task(content,avent_id) VALUES (?,?)");
    $requete->execute(array($content, $avent_id));
}

function fin_tache($task_id, $finisseur) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("UPDATE task SET finisseur =? WHERE task_id =? AND finisseur IS NULL");
    $requete->execute(array($finisseur, $task_id));
}

function supprimer_tache($task_id) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("DELETE FROM task WHERE task_id =?");
    $requete->execute(array($task_id));
}