<?php

    require_once '../m_collect_theme_fav_user.php';

    $IDofUser = 2;
    $Expect = getThemeUser($IDofUser);

    echo var_dump($Expect);
?>