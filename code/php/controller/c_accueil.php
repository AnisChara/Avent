<?php

require "./c_connexion.php";

if (isset($connexion) && $connexion == true)
{
    require './c_afficher_TL.php' ;
}
else 
{
    header("Location:./c_afficher_page_de_co.php");
}