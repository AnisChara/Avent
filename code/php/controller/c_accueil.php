<?php

require_once "./c_connexion.php";

if ($connexion != true)
{
    require_once "./c_afficher_page_de_co.php";
}
else 
{
    require_once "./c_afficher_TL.php";
}