<?php
require "../modele/m_create_user.php"; 
require "../modele/m_getID_from_mail.php";

$data = array('nom','prenom','pseudo','password' );
for ($i = 0; $i <COUNT($data); $i++) {

    if (empty($_POST[$data[$i]])) {
        $error_modif_msg = "Veuillez remplir tous les champs";
        require "./c_afficher_page_compte.php";
        exit();
    }
}
$modif = verif_inscription($_POST['email'],$_POST['pseudo']);

if ($modif[0] == true && $modif[1] == true) {
    
    $user_modif = modif_user($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['mot_de_passe'],$_POST['pp']);
    $id = get_userID($_POST['email']);

    if ($user_modif == true ) {

        require "../controller/c_afficher_page_compte.php";
        
    }
    else {
        echo "Error";
    }

}
else if ($modif[0] == true && $modif[1] == false)
{
    $error_modif_msg = "pseudo utilisé";
    require "./c_afficher_page_compte.php";
}
