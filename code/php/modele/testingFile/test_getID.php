<?php

require "../m_getID_from_mail.php";

$id = get_userID("test");

//echo $id[0]['user_id'] ;
var_dump($id);