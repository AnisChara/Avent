<?php 

function delete_avent($avent_id) 
{
    require 'm_connexion_bdd.php';

    $requete = $db->prepare('UPDATE avent SET etat = :etat WHERE avent_id = :avent_id');
    $requete->execute(array(':avent_id' => $avent_id, ':etat' => false ));
}   