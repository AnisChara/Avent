<?php 
require './c_verif_cookies.php';
require_once '../modele/m_taches.php';
require_once '../modele/m_get_pseudo_by_id.php';

verif_cookies();

$tasks = recuperer_toutes_les_taches($_POST['avent_id']);

foreach ($tasks as $key => $value) {
    if (!empty($tasks[$key]['finisseur']))
    {
        $tasks[$key]['pseudo'] = get_user_pseudo($tasks[$key]['finisseur']);
    }
}


require "../views/v_afficher_task.php";