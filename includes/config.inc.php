<?php
$windowtitle = array(
    'title' => 'Radio',
);

//Deprecated
/*
$header = array(
    'imgsrc' => 'logo.svg',
    'imgalt' => 'logo',
	'cim' => 'Rubbish',
	'motto' => 'lkjd asldj sapi sd'
);
*/

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Non-existant Company Inc.'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home', 'menun' => array(1,1)),
    'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery', 'menun' => array(1,1)),
    'videos' => array('file' => 'videos', 'text' => 'Videos', 'menun' => array(1,1)),
	'messages' => array('file' => 'messages', 'text' => 'Messages', 'menun' => array(1,1)),
    'tablazat' => array('file' => 'tablazat', 'text' => 'Database', 'menun' => array(1,1)),
    'login' => array('file' => 'login', 'text' => 'Sign In', 'menun' => array(1,0)),
    'account_sign_out' => array('file' => 'account_sign_out', 'text' => 'Sign Out', 'menun' => array(0,1)),
    'account_sign_in' => array('file' => 'account_sign_in', 'text' => '', 'menun' => array(0,0)),
    'account_sign_up' => array('file' => 'account_sign_up', 'text' => '', 'menun' => array(0,0)),
    'register' => array('file' => 'register', 'text' => 'Register', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'text' => 'A keresett oldal nem található!');
?>