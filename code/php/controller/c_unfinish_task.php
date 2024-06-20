<?php
require_once "../modele/m_taches.php";
require "../modele/m_getID_from_mail.php";
if (isset($_POST["task_id"]) == false) {
    require "c_afficher_page_full_avent.php";
    exit;
} 
nofin_tache($_POST["task_id"],get_userID($_COOKIE['email']));
require "c_afficher_tache.php";