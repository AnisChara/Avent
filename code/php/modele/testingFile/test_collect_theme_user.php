<?php

    require_once '../m_collect_theme_user.php';

    $ID = 1;
    $Expect1 = collectThemeUser($ID);

    echo var_dump($Expect1);

?>