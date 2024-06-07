<?php
require_once 'c_verif_cookies.php';

verif_cookies();

setcookie("MotherURL", 'c_afficher_TL.php');

require "../views/v_accueil_et_suggestions.php";
