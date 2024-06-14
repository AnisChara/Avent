<?php
require_once "../modele/tache.php";
require_once "../models/utilisateur.php";

if (isset($_POST["description"]) && trim($_POST["description"]) != "") {
    ajouter_tache(trim($_POST["description"],$_POST["avent_id"]));
} else {
    $erreur = "Veuillez remplir la description";
}
