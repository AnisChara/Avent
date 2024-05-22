<?php
require_once "../models/m_tache.php"; 
if (isset($_POST["description"]) && trim($_POST["description"]) != "") {
    ajouter_tache(trim($_POST["description"]),$avent_id);
} else {
    $erreur = "Veuillez remplir la description";
}
