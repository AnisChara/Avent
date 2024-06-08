<?php

require_once 'c_verif_cookies.php';

verif_cookies(); //si pas de cookies redirection page de co

require_once '../modele/m_getID_from_mail.php';
require_once '../modele/m_get_suggestion.php';
require_once '../modele/m_collect_img_avent.php';
require_once '../modele/m_gen_suggestion.php';
require_once '../modele/m_collect_avent_is_like.php';

$AventDisplay = get_suggestion(get_userID($_COOKIE['email']))[$_COOKIE['suggestion']];
$like = islike(get_userID($_COOKIE["email"]),$AventDisplay['avent_id']);
//var_dump($AventDisplay);
require './c_afficher_TL.php'; // cookies bien présent ou connexion réussie