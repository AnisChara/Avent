<?php

require_once "../modele/m_taches.php";

if (isset($_POST["description"]) && trim($_POST["description"]) != "") {
    // Corrected the function name and added the missing comma between the arguments
    ajouter_tache(trim($_POST["description"]), $_POST["avent_id"]);
} else {
    $erreur = "Veuillez remplir la description";
}
