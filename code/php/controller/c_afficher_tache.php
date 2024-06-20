<?php 
require './c_verif_cookies.php';
require_once '../modele/m_taches.php';

verif_cookies();

$tasks = recuperer_toutes_les_taches($_POST['avent_id']);


require "../views/v_afficher_task.php";