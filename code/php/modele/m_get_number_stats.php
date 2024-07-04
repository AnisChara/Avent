<?php


    function stats_avent($id,$time1 = false,$time2 = false)
    {
        require "m_connexion_bdd.php";

        $info = [[],[],[]];

        if($time1 == false || $time2 == false)
        {
            $arg = [':avent_id' => $id];

            $requeteLike = $db->prepare("SELECT COUNT(user_id) FROM  fav_avent_for_user WHERE avent_id = :avent_id");
            $requeteLike->execute($arg);
        
            $info[0] = $requeteLike->fetchAll()[0]["COUNT(user_id)"]; //nombre de like

            $requeteInscrit = $db->prepare("SELECT COUNT(user_id) FROM inscrit WHERE avent_id = :avent_id");
            $requeteInscrit->execute($arg);

            $info[1] = $requeteInscrit->fetchAll()[0]["COUNT(user_id)"]; //nombre d'inscrit

            $requeteViews = $db->prepare("SELECT COUNT(user_id) FROM views WHERE avent_id = :avent_id");
            $requeteViews->execute($arg);

            $info[2] = $requeteViews->fetchAll()[0]["COUNT(user_id)"]; //nombre de vues

            $requeteSearch = $db->prepare("SELECT COUNT(user_id) FROM search WHERE avent_id = :avent_id");
            $requeteSearch->execute($arg);

            $info[3] = $requeteSearch->fetchAll()[0]["COUNT(user_id)"]; //nombre de search
        }
        else
        {
            $arg = [':avent_id' => $id,':time1' => $time1, ':time2' => $time2];

            $requeteLike = $db->prepare("SELECT COUNT(user_id) FROM  fav_avent_for_user WHERE avent_id = :avent_id AND date_fav > :time1 AND date_fav <= :time2");
            $requeteLike->execute($arg);
        
            $info[0] = $requeteLike->fetchAll()[0]["COUNT(user_id)"];

            $requeteInscrit = $db->prepare("SELECT COUNT(user_id) FROM inscrit WHERE avent_id = :avent_id AND date_fav > :time1 AND date_fav <= :time2");
            $requeteInscrit->execute($arg);

            $info[1] = $requeteInscrit->fetchAll()[0]["COUNT(user_id)"]; //nombre d'inscrit

            $requeteViews = $db->prepare("SELECT COUNT(user_id) FROM views WHERE avent_id = :avent_id AND date_fav > :time1 AND date_fav <= :time2");
            $requeteViews->execute($arg);

            $info[2] = $requeteViews->fetchAll()[0]["COUNT(user_id)"]; //nombre de vues

            $requeteSearch = $db->prepare("SELECT COUNT(user_id) FROM search WHERE avent_id = :avent_id AND date_fav > :time1 AND date_fav <= :time2");
            $requeteSearch->execute($arg);

            $info[3] = $requeteSearch->fetchAll()[0]["COUNT(user_id)"]; //nombre de search
        }

        

        return $info;
    }