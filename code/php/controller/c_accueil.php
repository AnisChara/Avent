<?php

require "../utils/u_connexion.php";

$connexion = confirm_connexion();

if ($connexion ==! false)
{
    require './c_afficher_TL.php' ;
}
else if ($connexion === false)
{
    $error_connexion_msg = "Mot de passe ou email non trouvé";
    require "./c_afficher_page_de_co.php";
}
else
{
    require "./c_afficher_page_de_co.php";
}