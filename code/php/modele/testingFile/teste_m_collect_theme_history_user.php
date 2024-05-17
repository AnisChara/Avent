<?php

require_once '../m_collect_theme_history_user.php';

$UserID = 1;
$res = collectThemeHistory($UserID);

echo var_dump($res);

?>