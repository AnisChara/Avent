<?php

function collect_theme_for_avent($avent_id)
{
    require "m_connexion_bdd.php";

    $requete = $db->prepare("SELECT theme_name FROM theme JOIN theme_for_avent WHERE avent_id = ? AND theme.theme_id = theme_for_avent.theme_id;");
    $requete->execute(array($avent_id));

    $result = $requete->fetchAll();

    $themes = array();

    foreach ($result as $theme)
    {
        array_push($themes, $theme["theme_name"]);
    }

    return $themes;
}