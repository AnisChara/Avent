<?php 

require_once 'c_verif_cookies.php';

verif_cookies();

require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_recuperation_avent_inscrit.php';

$list_avent_inscrit = recuperer_avent_inscrit_user(get_userID($_COOKIE['email']));

require_once '../modele/m_collect_nom_user_from_id.php';
require_once '../modele/m_collect_img_avent.php';

setcookie("MotherURL", 'c_avent_inscription.php');

require 'c_afficher_page_avent_inscription.php';