<?php

function create_user($nom,$prenom,$date_naissance,$email,$genre,$pseudo,$mot_de_passe) {
    require "m_connexion_bdd.php";
    $req = "INSERT INTO user(nom, prenom, date_naissance, email, genre, pseudo, mot_de_passe) VALUES (:nom,:prenom,:date_naissance,:email,:genre,:pseudo,:mot_de_passe)";
    $argument = [[":nom",$nom],[":prenom",$prenom],[":date_naissance",$date_naissance],[":email",$email],[":genre",$genre],[":pseudo",$pseudo],[":mot_de_passe",$mot_de_passe]];
    try {
        $creation = queryDB($db,$req,$argument);
    } catch (Exception $error) { echo 'error'; return false;};
    return true;
}
function relier_themename_themeid($theme1, $theme2, $theme3) {
    $requete = $db->prepare("SELECT theme_id FROM theme WHERE theme_name = :theme1 OR theme_name = :theme2 OR theme_name = :theme3");
    $requete->execute(array(':theme1' => $theme1, ':theme2' => $theme2, ':theme3' => $theme3));
    $resultat = $requete->fetchAll();
    $theme_ids = array();
    foreach ($resultat as $row) {
        $theme_ids[] = $row[0];
    }
    return $theme_ids;
}
function insert_theme_for_user($user_id, $theme1, $theme2, $theme3) {
    $theme_ids = relier_themename_themeid($theme1, $theme2, $theme3);
    $requete = $db->prepare("INSERT INTO fav_theme_for_user(user_id, theme_id) VALUES (?,?)");
    $requete->execute(array($user_id, $theme_ids[0]));
    $requete->execute(array($user_id, $theme_ids[1]));
    $requete->execute(array($user_id, $theme_ids[2]));
}