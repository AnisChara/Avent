<?php 

function create_avent($nom,$date_debut,$date_fin,$fin_inscription, $information, $capacity, $payant, $public, $lien_site, $lien_billeterie, $lieu, $age_minimum, $sous_theme, $createur){
    // connect bdd 
    require "m_connexion_bdd.php";

   /* $nom = $_POST['nom'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $information = $_POST['information'];
    $capacity = $_POST['capacity'];
    $payant = $_POST['is_payant'];
    $public = $_POST['is_public'];
    $fin_inscription = $_POST['fin_inscription'];
    $lien_site = $_POST['lien_site'];
    $lien_billeterie = $_POST['lien_billetterie'];
    $lieu = $_POST['lieu'];
    $age_minimum = $_POST['age_minimum'];
    $sous_theme = $_POST['sous_theme'];
    $img = $_POST['image'];*/

    /*if (isset($_POST['btn_ajouter']))
    {*/
        // ptit GUARD pour savoir si les tous les champs sont remplies 
        if ($nom && $date_debut && $date_fin && $fin_inscription && $information && $capacity && $payant && $public && $lien_site && $lien_billeterie && $lieu && $age_minimum && $sous_theme && $createur) 
        {    
            // j'insert mes donnée dans la bdd 
            $requete = $db->prepare("INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, capacity, is_payant, is_public, lien_site, lien_billeterie, lieu, age_minimum, sous_theme, createur) VALUES (:nom, :date_debut, :date_fin, :fin_inscription, :information, :capacity, :payant, :public, :lien_site, :lien_billeterie, :lieu, :age_minimum, :sous_theme, :createur)");
            $requete->execute(array(':nom' => $nom , ':date_debut' => $date_debut, ':date_fin' => $date_fin, ':information' => $information, ':fin_inscription' => $fin_inscription, ':capacity' => $capacity, ':payant' => $payant, ':public' => $public, ':lien_site' => $lien_site, ':lien_billeterie' => $lien_billeterie, ':lieu' => $lieu, ':age_minimum' => $age_minimum, ':sous_theme' => $sous_theme, ':createur' => $createur));
            // on rajoute un ptit message pour le flex 
            $message = '<p style="color:green">Merci a toi ! L\'avent a bien été ajouté </p>';
            echo $message;
        }

        else 
        {
            $message = '<p style="color:red">Veuillez remplir tous les champs</p>';
        }
    /*}*/
}