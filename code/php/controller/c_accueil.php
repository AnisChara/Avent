<?php

require_once '../modele/m_verif_cookies.php';

verif_cookies(); //si pas de cookies redirection page de co

require '../modele/m_getID_from_mail.php';
require '../modele/m_get_suggestion.php';
require '../modele/m_collect_img_avent.php';
require "../modele/m_gen_suggestion.php";

$AventDisplay = get_suggestion(get_userID($_COOKIE['email']))[$_COOKIE['suggestion']];
//var_dump($AventDisplay);
require './c_afficher_TL.php'; // cookies bien présent ou connexion réussie