<?php

require "../modele/m_verif_inscription.php";
require "../modele/m_create_user.php";
require "../modele/m_getID_from_mail.php";


$inscription = verif_inscription($_POST['email'],$_POST['pseudo']);

if ($inscription[0] == true && $inscription[1] == true) {
    
    $user_creation = create_user($_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['email'],$_POST['genre'],$_POST['pseudo'],$_POST['mot_de_passe']);
    $id = get_userID($_POST['email'])[0]['user_id'];
    $theme_insertion = insert_theme_for_user($id,$_POST['theme1'], $_POST['theme2'], $_POST['theme3']);

    if ($user_creation == true && $theme_insertion == true) {
        require "../views/v_confirmation_inscription.php";
        //cookies
    }
    else {
        echo "Error";
    }

}
else if ($inscription[0] == true && $inscription[1] == false)
{
    $error_inscription_msg = "pseudo utilisé";
    require "./c_afficher_page_inscription.php";
}
else if ($inscription[0] == false && $inscription[1] == true)
{
    $error_inscription_msg = "mail utilisé";
    require "./c_afficher_page_inscription.php";
}
else if ($inscription[0] == false && $inscription[1] == false)
{
    $error_inscription_msg = "pseudo et mail utilisés";
    require "./c_afficher_page_inscription.php";
}

