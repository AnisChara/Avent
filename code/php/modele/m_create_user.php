<?php
function creer_utilisateur($nom, $prenom, $email,$pseudo,$mot_de_passe,$date_naissance,$is_verif,$is_brand,$pp,$genre) {
    require "m_recuperationDB.php";
    $current_date = getdate();
    $requete = $db->prepare("INSERT INTO user(nom, prenom, email, pseudo, mot_de_passe, date_naissance, is_verif, is_brand, pp, genre, date_creation) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $requete->execute(array($nom, $prenom, $email, $pseudo, $hashed_password, $date_naissance, $is_verif, $is_brand, $pp, $genre, $current_date['year']. '-'. $current_date['mon']. '-'. $current_date['mday']));
    $user_id = $db->lastInsertId();
    return $user_id;
}
function relier_themename_themeid($theme1, $theme2, $theme3) {
    require "m_recuperationDB.php";
    $requete = $db->prepare("SELECT theme_id FROM theme WHERE theme_name = :theme1 OR theme_name = :theme2 OR theme_name = :theme3");
    $requete->execute(array(':theme1' => $theme1, ':theme2' => $theme2, ':theme3' => $theme3));
    $resultat = $requete->fetchAll();
    $theme_ids = array();
    foreach ($resultat as $row) {
        $theme_ids[] = $row[0];
    }
    return $theme_ids;
}
function relier_user_theme($user_id, $theme1, $theme2, $theme3) {
    require "m_recuperationDB.php";
    $theme_ids = relier_themename_themeid($theme1, $theme2, $theme3);
    $requete = $db->prepare("INSERT INTO fav_theme_for_user(user_id, theme_id) VALUES (?,?)");
    $requete->execute(array($user_id, $theme_ids[0]));
    $requete->execute(array($user_id, $theme_ids[1]));
    $requete->execute(array($user_id, $theme_ids[2]));
}
