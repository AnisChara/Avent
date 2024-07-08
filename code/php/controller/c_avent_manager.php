<?php

require_once 'c_verif_cookies.php';

//verif_cookies();


require_once '../modele/m_get_number_stats.php';
require_once '../modele/m_get_taches.php';
require_once '../modele/m_get_organisateurs.php';
require_once '../modele/m_get_timeAvent.php';

$id = $_POST['avent_id'];

$avent_date = timeAvent($id);
$avent_time = (strtotime($avent_date[0]['date_fin']) - strtotime($avent_date[0]['date_creation'])); //en secondes
$depart = date_create_from_format('Y-m-d H:i:s',$avent_date[0]['date_creation']);
//echo date_modify(date_create_from_format('Y-m-d H:i:s',$avent_date[0]['date_creation']), "+".$time." second"); //2024-09-03 18:00:00 + 60 secondes ? 2024-07-13 11:16:59.000000
//var_dump(date_create_from_format('Y-m-d H:i:s',$avent_date[0]['date_creation'])); //ajouter supprimer ou modifier un avent.
$minute = 60;
$hour = $minute * 60;
$day = $hour * 24;
$month = $day * 30;
$year = $month * 12;

$time = null;

if($avent_time % ($minute * 10) > 1)
{
    $time = $minute;
};
if($avent_time % ($hour * 2) > 1)
{
    $time = $hour;
};
if($avent_time % ($day * 2) > 1)
{
    $time = $day;
};
if($avent_time % ($month * 2) > 1)
{
    $time = $month;
};
if($avent_time % ($year * 2) > 1)
{
    $time = $year;
};


$statsGlobal = stats_avent($id); // nombre de : [0]like [1]inscrit [2]vue [3]search
$list_taches = taches($id);
$list_orga = organisateurs($id);
