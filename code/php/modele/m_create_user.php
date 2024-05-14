<?php
function recuperer_utilisateur_par_email($email) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("SELECT * FROM user WHERE email = ?");
    $requete->execute(array($email));
    $resultat = $requete->fetch();
    return $resultat;
}

function recuperer_utilisateur_par_id($id) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("SELECT * FROM user WHERE id = ?");
    $requete->execute(array($id));
    $resultat = $requete->fetch();
    return $resultat;
}


function creer_utilisateur($nom, $prenom, $email,$pseudo,$date_naissance,$is_verif,$is_brand,$pp,$genre) {
    require "m_connexion_bdd.php";
    $requete = $db->prepare("INSERT INTO user(nom, prenom, email,pseudo,date_naissance,is_verif,is_brand,pp,genre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $requete->execute(array($nom, $prenom, $email,$pseudo,$date_naissance,$is_verif,$is_brand,$pp,$genre));
    $resultat = $requete;
    return $resultat;
}
