<?php
require "../modele/m_create_user.php"; 
require "../modele/m_getID_from_mail.php";

$data = array('nom','prenom','pseudo','mot_de_passe' );
for ($i = 0; $i <COUNT($data); $i++) {

    if (empty($_POST[$data[$i]])) {
        $error_modif_msg = "Veuillez ne pas laisser de champs vides.";
        require "./c_afficher_compte.php";
        exit();
    }
}
$modif = verif_modif(get_userID($_COOKIE["email"]),$_POST['pseudo'],$_POST['email']);

if ($modif == true) {
    
    $user_modif = modif_user(get_userID($_COOKIE["email"]),$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pseudo'],$_POST['mot_de_passe']);
   
    require "c_afficher_compte.php";

}
else require "/c_afficher_compte.php";
 
