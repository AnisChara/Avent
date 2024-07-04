<?php


    function organisateurs($id)
    {
        require 'm_connexion_bdd.php';

        $requeteOrganisateurs = $db->prepare("SELECT pseudo FROM user INNER JOIN organisateur_avent ON user.user_id = organisateur_avent.user_id WHERE organisateur_avent.avent_id = :id");
        $requeteOrganisateurs->execute(array(':id' => $id));

        $expect = $requeteOrganisateurs->fetchAll();

        $res = [];
        for($j = 0; $j < COUNT($expect); $j++)
        {
            $res[$j] = $expect[$j]['pseudo'];
        }

        return $res;
    }