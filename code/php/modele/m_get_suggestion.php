<?php

function get_suggestion($user_id)
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare("SELECT avent_id FROM suggestions WHERE user_id = :user_id GROUP BY indice ASC");
    $requete->execute(array('user_id' => $user_id ));

    $resultat = $requete->fetchAll();

    return $resultat;

}