<?php 



function insert_theme_for_avent($avent_id, $theme1, $theme2, $theme3) {
    require "m_connexion_bdd.php";
    require "m_create_user.php";
    require_once 'm_recuperationDB.php';
    $theme_ids = relier_themename_themeid($theme1, $theme2, $theme3);
    var_dump($theme_ids);
    $requete = "INSERT INTO theme_for_avent(avent_id, theme_id) VALUES (:avent_id,:theme_id)";
    try {
        for ($i = 0; $i < COUNT($theme_ids); $i++)
        {
            $argument = [[':avent_id' , $avent_id], [':theme_id', $theme_ids[$i]]];
            $result = queryDB($db,$requete,$argument);
        }
    } catch (Exception $error) { echo 'error insert theme'; return false;};
    return true;
}

function create_avent($nom,$date_debut,$date_fin,$fin_inscription, $information, $capacity, $is_payant, $is_public, $lien_site, $lien_billeterie, $lieu, $age_minimum, $sous_theme, $createur, $theme1, $theme2, $theme3){
    // connect bdd 
    require "m_connexion_bdd.php";
    require "m_get_aventID_from_name.php";

    if ($nom && $date_debut && $date_fin && $fin_inscription && $information && $capacity && $is_payant && $is_public && $lien_site && $lien_billeterie && $lieu && $age_minimum && $sous_theme && $createur) 
    {    
        $requete = $db->prepare("INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, capacity, is_payant, is_public, lien_site, lien_billeterie, lieu, age_minimum, sous_theme, createur) VALUES (:nom, :date_debut, :date_fin, :fin_inscription, :information, :capacity, :payant, :public, :lien_site, :lien_billeterie, :lieu, :age_minimum, :sous_theme, :createur)");
        $requete->execute(array(':nom' => $nom , ':date_debut' => $date_debut, ':date_fin' => $date_fin, ':information' => $information, ':fin_inscription' => $fin_inscription, ':capacity' => $capacity, ':payant' => $payant, ':public' => $public, ':lien_site' => $lien_site, ':lien_billeterie' => $lien_billeterie, ':lieu' => $lieu, ':age_minimum' => $age_minimum, ':sous_theme' => $sous_theme, ':createur' => $createur));
        insert_theme_for_avent(get_avent_id($nom), $theme1, $theme2, $theme3);
        $message = '<p style="color:green">Merci a toi ! L\'avent a bien été ajouté </p>';
        echo $message;
    }
    else 
    {
        $message = '<p style="color:red">Veuillez remplir tous les champs</p>';
    }
}