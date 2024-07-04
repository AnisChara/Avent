<?php


    function taches($id)
    {
        require "m_connexion_bdd.php";

        $requeteTaches = $db->prepare("SELECT * FROM task WHERE avent_id = :avent_id");
        $requeteTaches->execute(array(':avent_id' => $id));

        return $requeteTaches->fetchAll();
    }