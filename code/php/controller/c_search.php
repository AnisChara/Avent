<?php

require_once 'c_verif_cookies.php';

verif_cookies(); //si pas de cookies redirection page de co

require_once '../modele/m_search_avent.php';
require_once '../modele/m_collect_info_display_full.php';
require_once '../modele/m_recuperation_info_user.php';

$AventList = search_avent($_POST['search']);

require './c_afficher_search.php';