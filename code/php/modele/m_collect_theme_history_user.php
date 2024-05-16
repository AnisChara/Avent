<?php

function collectThemeHistory($UserID)
{
    require_once 'm_connexion_bdd.php';
    require_once 'm_recuperationDB.php';

    $collectNumber = 25;
    $collectPourcentage = 10;
    
    $queryLastSeenByUser = 'SELECT avent_id FROM views WHERE user_id = :user_id ORDER BY views.date_view ASC /*LIMIT :collectNumber*/;';
    $argumentsLastSeenByUser = [[":user_id",$UserID]]; //,[":collectNumber",$collectNumber]

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

?>