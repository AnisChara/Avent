<?php

require_once "../modele/m_taches.php";

if (isset($_POST["description"]) && trim($_POST["description"]) != "") {
    ajouter_tache(trim($_POST["description"]), $_POST["avent_id"]);
} else {
    $erreur = "Veuillez remplir la description";
}
require "c_afficher_page_full_avent.php";
