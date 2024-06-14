<?php 

require_once 'c_verif_cookies.php';

verif_cookies();

require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_recuperation_mes_avents.php';

$list_avent = recuperer_mes_avents(get_userID($_COOKIE['email']));

require_once '../modele/m_collect_nom_user_from_id.php';
require_once '../modele/m_collect_img_avent.php';

require 'c_afficher_page_avent.php';