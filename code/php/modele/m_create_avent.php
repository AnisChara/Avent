<?php 



function insert_theme_for_avent($avent_id, $theme1, $theme2, $theme3) {
    require "m_connexion_bdd.php";
    require "m_create_user.php";
    require_once 'm_recuperationDB.php';
    $theme_ids = relier_themename_themeid($theme1, $theme2, $theme3);
    $requete = "INSERT INTO theme_for_avent(avent_id, theme_id) VALUES (:avent_id,:theme_id)";
    try {
        for ($i = 0; $i < COUNT($theme_ids); $i++)
        {
            if ($theme_ids[$i] !== 1)
            {
                $argument = [[':avent_id' , $avent_id], [':theme_id', $theme_ids[$i]]];
                $result = queryDB($db,$requete,$argument);
            }
            
        }
    } catch (Exception $error) { echo 'error insert theme'; return false;};
    return true;
}

function create_sous_theme($sous_theme,$avent_id)
{
    require "m_connexion_bdd.php";
    $requete = $db->prepare("INSERT INTO sous_theme (sous_theme_name,avent_id) VALUES (:sous_theme,:avent_id)");
    $requete->execute(array(':sous_theme' => $sous_theme, ':avent_id' => $avent_id));
    return true;
}

function create_avent($nom,$date_debut,$date_fin,$fin_inscription, $information, $capacity, $is_payant, $is_public, $lien_site, $lien_billeterie, $lieu, $age_minimum, $createur, $theme1, $theme2, $theme3,$sous_themes){
    // connect bdd 
    require "m_connexion_bdd.php";
    require_once "m_get_aventID_from_name.php";
    require "m_insert_img.php";


    $requete = $db->prepare("INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, capacity, is_payant, is_public, lien_site, lien_billeterie, lieu, age_minimum, createur) VALUES (:nom, :date_debut, :date_fin, :fin_inscription, :information, :capacity, :payant, :public, :lien_site, :lien_billeterie, :lieu, :age_minimum, :createur)");
    $requete->execute(array(':nom' => $nom , ':date_debut' => $date_debut, ':date_fin' => $date_fin, ':information' => $information, ':fin_inscription' => $fin_inscription, ':capacity' => $capacity, ':payant' => $is_payant, ':public' => $is_public, ':lien_site' => $lien_site, ':lien_billeterie' => $lien_billeterie, ':lieu' => $lieu, ':age_minimum' => $age_minimum, ':createur' => $createur));
    
    $avent_id = get_avent_id($nom,$date_debut,$date_fin);
    
    insert_theme_for_avent($avent_id, $theme1, $theme2, $theme3);

    for($i =0; $i<count($sous_themes); $i++)
    {
        if (!empty($sous_themes[$i])) 
        {
            create_sous_theme($sous_themes[$i], $avent_id);
        }
    }
} 