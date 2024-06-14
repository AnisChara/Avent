<?php

require_once '../modele/m_recuperation_info_user.php';
require_once 'c_verif_cookies.php';
require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_collect_img_profil.php';

verif_cookies();



$info = recuperer_info_user(get_userID($_COOKIE['email']));

$user_id = $info['user_id'];
$nom = $info['nom'];
$prenom = $info['prenom'];
$pseudo = $info['pseudo'];
$mot_de_passe = $info['mot_de_passe'];
$date_de_naissance = $info['date_naissance'];
$is_verif = $info['is_verif'];
$is_brand = $info['is_brand'];
$pp = img_profil($user_id);
$genre = $info['genre'];
$date_de_creation = $info['date_creation'];

require 'c_afficher_page_compte.php';