<?php

function collectThemeHistory($UserID)
{
    require 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    $collectNumber = 25;
    
    $queryLastSeenByUser = 'SELECT fav_avent_for_user.avent_id FROM fav_avent_for_user INNER JOIN views ON fav_avent_for_user.avent_id = views.avent_id LEFT JOIN inscrit ON fav_avent_for_user.avent_id = inscrit.avent_id WHERE views.user_id = :user_id ORDER BY views.date_view ASC LIMIT :collectNumber';
    $argumentsLastSeenByUser = [[":user_id",$UserID],[":collectNumber",$collectNumber,"INT"]];

    $brutdataLastSeenByUser = queryDB($db,$queryLastSeenByUser,$argumentsLastSeenByUser);


    $queryThemeLastSeenByUser = 'SELECT theme.theme_name FROM theme INNER JOIN theme_for_avent ON theme.theme_id = theme_for_avent.theme_id WHERE avent_id = :avent_id;';
    $brutdataThemeLastSeenByUser = [];
    
    for($i = 0; $i < COUNT($brutdataLastSeenByUser); $i++)
    {
        $IDAVent = $brutdataLastSeenByUser[$i]['avent_id'];
        $argumentsThemeLastSeenByUser = [[":avent_id",$IDAVent]];

        $brutdataThemeLastSeenByUser[COUNT($brutdataThemeLastSeenByUser)] = queryDB($db,$queryThemeLastSeenByUser,$argumentsThemeLastSeenByUser);
    }

    $dataThemeLastSeenByUser = [];
    for($i = 0; $i < COUNT($brutdataThemeLastSeenByUser); $i++)
    {
        for($y = 0; $y < COUNT($brutdataThemeLastSeenByUser[$i]); $y++)
        {
            $dataThemeLastSeenByUser[COUNT($dataThemeLastSeenByUser)] = $brutdataThemeLastSeenByUser[$i][$y]['theme_name'];
        }
    }

    return $dataThemeLastSeenByUser;

}