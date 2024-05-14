<?php

require "../modele/m_verif_inscription.php";
require "../modele/m_create_user.php";


$inscription = verif_user_inscription($_POST['nom'],$_POST['prenom'],$_POST['date_de_naissance'],$_POST['adresse_mail'],$_POST['genre'],$_POST['pseudo'],$_POST['password'],$_POST['theme1'],$_POST['theme2'],$_POST['theme3']);

if ($inscription == true) {
    
    $user_creation = create_user($_POST['nom'],$_POST['prenom'],$_POST['date_de_naissance'],$_POST['adresse_mail'],$_POST['genre'],$_POST['pseudo'],$_POST['password'],$_POST['theme1'],$_POST['theme2'],$_POST['theme3']);

}

