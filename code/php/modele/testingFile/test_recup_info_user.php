<?php
require '../m_recuperation_info_user.php';
require "../m_recuperationDB.php";

$user = 1;
echo var_dump(recuperer_info_user($user));