<?php

require "./c_connexion.php";

if (isset($connexion) && $connexion ==! false)
{
    require './c_afficher_TL.php' ;
}
else if (isset($connexion) && $connexion === false)
{
    $error_connexion_msg = "Mot de passe ou email non trouvé";
    require "./c_afficher_page_de_co.php";
}
else
{
    require "./c_afficher_page_de_co.php";
}