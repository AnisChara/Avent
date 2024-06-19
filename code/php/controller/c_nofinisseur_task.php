<?php
require_once "../modele/m_taches.php";
if (isset($_POST["task_id"]) == false) {
    require "c_afficher_page_full_avent.php";
    exit;
} 
nofin_tache($_POST["task_id"],$_POST["user_id"]);
require "c_afficher_page_full_avent.php";