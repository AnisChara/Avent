<?php 

require '../modele/m_create_avent.php';
require '../modele/m_getID_from_mail.php';
require_once '../modele/m_get_aventID_from_name.php';
require '../modele/m_insert_img_for_avent.php';
require_once 'c_verif_cookies.php';
require_once '../modele/m_get_image_id.php';

verif_cookies();

//Array de sous theme
$sous_themes = array($_POST['sous_theme1'], $_POST['sous_theme2'], $_POST['sous_theme3']);

$infos = array('nom','date_debut','date_fin','information','is_payant','is_public');

foreach($infos as $info)
{
    if(empty($_POST[$info]))
    {
        $message = "Veuillez remplir tous les champs.";
        require 'c_afficher_create_avent.php';
    }
}

$themes = array('theme1','theme2','theme3');
$nb_theme = 0;

foreach($themes as $theme)
{
    if($theme !== 'Aucune')
    {
        $nb_theme++;
    }
}

if ($nb_theme === 0)
{
    require 'c_afficher_create_avent.php';
    $message= 'Veuillez choisir au moins 1 thématiques.';
}

//insert sous theme
create_avent($_POST['nom'], $_POST['date_debut'], $_POST['date_fin'], $_POST['fin_inscription'], $_POST['information'],$_POST['capacity'],$_POST['is_payant'],$_POST['is_public'],$_POST['lien_site'],$_POST['lien_billeterie'],$_POST['lieu'],$_POST['age_minimum'],get_userID($_COOKIE['email']),$_POST['theme1'],$_POST['theme2'],$_POST['theme3'],$sous_themes);


$uniqid = uniqid('image_');
$value = insert_img($_FILES,'image',$uniqid);
$photo_id = get_image_id($uniqid);
insert_img_for_avent(get_avent_id($_POST['nom'],$_POST['date_debut'],$_POST['date_fin']),$photo_id);

require 'c_avent.php';