<?php

function get_info_avent_full_display($avent_id)
{
    require "m_connexion_bdd.php";
    require_once "m_collect_theme_for_avent.php";
    require_once "m_collect_img_avent.php";
    require_once "m_collect_inscrit_count.php";
    require_once "m_collect_fav_count.php";

    $img = img_avent($avent_id);
    $inscrit_count = get_inscrit_count($avent_id);
    $fav_count = get_fav_count($avent_id);
    $themes = collect_theme_for_avent($avent_id);

    $requete = $db->prepare("SELECT * FROM avent WHERE avent_id = :avent_id");
    $requete->execute(array(":avent_id"=>$avent_id));
    $result = $requete->fetchAll();

    $req_sous_theme = $db ->prepare("SELECT sous_theme_name FROM sous_theme WHERE avent_id = :avent_id");
    $req_sous_theme->execute(array(":avent_id"=>$avent_id));
    $sous_theme = $req_sous_theme->fetchAll();
    
    array_push($result, $img, $inscrit_count, $fav_count, $themes, $sous_theme);

    return $result;
    
}