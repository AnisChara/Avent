<?php

require "../m_create_user.php";
require "../m_recuperationDB.php";
require "../m_getID_from_mail.php";

$user_creation = create_user("test","test","2000-01-01","test",3,"test","test");

echo get_userID("test")[0]['user_id'];

$themes = insert_theme_for_user(get_userID("test")[0]['user_id'],"Santé", 'Cuisine', 'Histoire');

var_dump($themes);