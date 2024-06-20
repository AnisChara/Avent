<?php
require_once "../modele/m_taches.php";
if (!isset($_POST["task_id"])) {
    require "c_afficher_page_full_avent.php";
    exit;
} 

supprimer_tache($_POST["task_id"]);

require "c_afficher_page_full_avent.php";