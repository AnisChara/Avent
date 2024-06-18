<?php
require_once "../modele/m_get_theme.php";
$themelist = get_theme();
$date = getdate();

if (strlen($date['mon']) === 1)
{
    $date['mon']= '0'.$date['mon'];
}

require "../views/v_creation.php";