<?php

require "./c_connexion.php";

if ($connexion != true)
{
    require "./c_afficher_page_de_co.php";
}
else 
{
    require "./c_afficher_TL.php";
}