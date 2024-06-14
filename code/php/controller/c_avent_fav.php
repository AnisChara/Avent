<?php 

require_once 'c_verif_cookies.php';

verif_cookies();

require '../modele/m_getID_from_mail.php';
require '../modele/m_recuperation_avent_fav.php';

$list_avent_fav = recuperer_avent_fav_user(get_userID($_COOKIE['email']));

require '../modele/m_collect_nom_user_from_id.php';
require '../modele/m_collect_img_avent.php';

require 'c_afficher_page_avent_fav.php';