<?php

require '../modele/m_verif_cookies.php';

verif_cookies();

if(isset($_COOKIE['MotherURL']))
{
    $ParentUrl = $_COOKIE['MotherURL'];
}
else
{
    header("Location:./c_afficher_page_de_co.php");
}