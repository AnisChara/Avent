<?php

function collectThemeUser($UserID)
{
    require 'm_collect_theme_fav_user.php';
    require 'm_collect_theme_history_user.php';

    $themeUser = getThemeUser($UserID);
    $themeHistoryUser = collectThemeHistory($UserID);

    $list = [];

    for($i = 0; $i < COUNT($themeUser); $i++)
    {
        $list[COUNT($list)] = $themeUser[$i];
    }

    for($y = 0; $y < COUNT($themeHistoryUser); $y++)
    {
        $list[COUNT($list)] = $themeHistoryUser[$y];
    }

    return $list;
    //fin_inscription et date_fin;



}