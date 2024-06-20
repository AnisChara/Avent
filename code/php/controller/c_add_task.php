<?php

require_once "../modele/m_taches.php";

if (!empty($_POST["task"])) {
    ajouter_tache($_POST["task"], $_POST["avent_id"]);
} else {
    $erreur = "Veuillez remplir la description";
}
require "c_afficher_tache.php";
