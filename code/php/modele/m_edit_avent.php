<?php

function edit_avent($avent_id) 
{
require 'm_connexion_bdd.php';

    $req = $bdd->prepare('UPDATE avent SET nom = :nom, date_debut = :date_debut, date_fin = :date_fin, information = :information, fin_inscription = :fin_inscription, capacity = :capacity, payant = :payant, public = :public, lien_site = :lien_site, lien_billeterie = :lien_billeterie, lieu = :lieu, age_minimum = :age_minimum, sous_theme = :sous_theme, createur = :createur WHERE avent_id = :avent_id');
    $req->execute(array('avent_id' => $avent_id, ':nom' => $nom, ':date_debut' => $date_debut, ':date_fin' => $date_fin, ':information' => $information, ':fin_inscription' => $fin_inscription, ':capacity' => $capacity, ':payant' => $payant, ':public' => $public, ':lien_site' => $lien_site, ':lien_billeterie' => $lien_billeterie, ':lieu' => $lieu, ':age_minimum' => $age_minimum, ':sous_theme' => $sous_theme, ':createur' => $createur));

}