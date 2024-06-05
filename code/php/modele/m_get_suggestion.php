<?php

function get_suggestion($user_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("SELECT * FROM  avent INNER JOIN suggestions ON avent.avent_id = suggestions.avent_id WHERE user_id = :user_id ORDER BY indice ASC");
    $requete->execute(array(':user_id' => $user_id ));

    $resultat = $requete->fetchAll();

    return $resultat;

}