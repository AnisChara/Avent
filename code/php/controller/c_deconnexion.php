<?php

if (isset($_COOKIE['email']) || isset($_COOKIE['mot_de_passe'])) {
    //unset($_COOKIE['email']);
    if($_COOKIE['email'] == '0' || $_COOKIE['mot_de_passe'] == '0')
    {
        header("Location:./c_afficher_page_de_co.php");
    }
    else
    {
        setcookie('email', '0', time()+3600);
        setcookie('mot_de_passe', '0', time()+3600);

        header("Location:./c_deconnexion.php");
    }
    //setcookie('email', '', time() - 3600, '/'); // empty value and old timestamp
}
/*
if (isset($_COOKIE['mot_de_passe'])) {
    //unset($_COOKIE['mot_de_passe']);
    setcookie('mot_de_passe', '0', 9000000000);
    //setcookie('mot_de_passe', '', time() - 3600, '/'); // empty value and old timestamp
}


unset($_COOKIE['email']);
unset($_COOKIE['mot_de_passe']);

setcookie('email', "", -10);
setcookie('mot_de_passe', "",-10);

require 'c_afficher_page_de_co.php';


header("Location:./c_accueil.php"); */