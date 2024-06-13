<?php

function create_user($nom,$prenom,$date_naissance,$email,$genre,$pseudo,$mot_de_passe) {
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';
    $req = "INSERT INTO user(nom, prenom, date_naissance, email, genre, pseudo, mot_de_passe, pp) VALUES (:nom,:prenom,:date_naissance,:email,:genre,:pseudo,:mot_de_passe, 1)";
    $argument = [[":nom",$nom],[":prenom",$prenom],[":date_naissance",$date_naissance],[":email",$email],[":genre",$genre],[":pseudo",$pseudo],[":mot_de_passe",$mot_de_passe]];
    try {
        $creation = queryDB($db,$req,$argument);
    } catch (Exception $error) { echo $error; return false;};
    return true;
}
function modif_user($nom, $prenom, $pseudo, $mot_de_passe, $pp) {
    require "m_connexion_bdd.php";
    $requete1 = $db->prepare("SELECT * FROM user WHERE email =?");
    $requete1->execute(array($email));
    $resultat1 = $requete1->fetch();

    $requete2 = $db->prepare("UPDATE user SET nom =?, prenom =?, pseudo =?, mot_de_passe =? WHERE user_id =?");
    $requete2->execute(array($nom, $prenom, $date_naissance, $email, $genre, $pseudo, $mot_de_passe, $id));
    $resultat2 = $requete2;
    return [$resultat1,$resultat2];
}
function relier_themename_themeid($theme1, $theme2, $theme3) {
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';
    $requete = "SELECT theme_id FROM theme WHERE theme_name = :theme1 OR theme_name = :theme2 OR theme_name = :theme3";
    $argument = [[':theme1' , $theme1], [':theme2', $theme2], [':theme3' , $theme3]];
    try {
        $resultat = queryDB($db,$requete,$argument);
    } catch (Exception $error) { echo 'error relier theme name'; return false;};
    $theme_ids = array();
    foreach ($resultat as $row) {
        array_push($theme_ids, $row['theme_id']) ;
    }
    return $theme_ids;
}
function insert_theme_for_user($user_id, $theme1, $theme2, $theme3) {
    require "m_connexion_bdd.php";
    require_once 'm_recuperationDB.php';
    $theme_ids = relier_themename_themeid($theme1, $theme2, $theme3);
    $requete = "INSERT INTO fav_theme_for_user(user_id, theme_id) VALUES (:user_id,:theme_id)";
    try {
        for ($i = 0; $i < COUNT($theme_ids); $i++)
        {
            $argument = [[':user_id' , $user_id], [':theme_id', $theme_ids[$i]]];
            $result = queryDB($db,$requete,$argument);
        }
    } catch (Exception $error) { echo 'error insert theme'; return false;};
    return true;
}