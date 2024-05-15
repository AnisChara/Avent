<?php

    require_once '../m_collect_theme_user.php';

    $IDofUser = 2;
    $Expect = getThemeUser($IDofUser);

    echo $Expect[0];
    echo $Expect[1];
    echo $Expect[2];
    echo var_dump($Expect);
?>