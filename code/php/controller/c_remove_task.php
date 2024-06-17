<?php

if (isset($_POST["task_id"]) == false) {
    require "c_afficher_page_full_avent.php";
    exit;
}

require_once "../modele/m_taches.php";

supprimer_tache($_GET["id"]);

require "c_afficher_page_full_avent.php";
