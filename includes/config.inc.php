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
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery', 'menun' => array(1,1)),
    'feltolt' => array('file' => 'feltolt', 'text' => '', 'menun' => array(0,0)),
    'videos' => array('file' => 'videos', 'text' => 'Videos', 'menun' => array(1,1)),
    'database' => array('file' => 'database', 'text' => 'Database', 'menun' => array(1,1)),
    'about' => array('file' => 'about', 'text' => 'About', 'menun' => array(1,1)),
    'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
    'contact_form_submit' => array('file' => 'contact_form_submit', 'text' => '', 'menun' => array(0,0)),
	'messages' => array('file' => 'messages', 'text' => 'Messages', 'menun' => array(0,1)),
    'register' => array('file' => 'register', 'text' => 'Register', 'menun' => array(0,0)),
    'account_sign_up' => array('file' => 'account_sign_up', 'text' => '', 'menun' => array(0,0)),
    'login' => array('file' => 'login', 'text' => 'Sign In', 'menun' => array(1,0)),
    'account_sign_in' => array('file' => 'account_sign_in', 'text' => '', 'menun' => array(0,0)),
    'account_sign_out' => array('file' => 'account_sign_out', 'text' => 'Sign Out', 'menun' => array(0,1))
);

$hiba_oldal = array ('fajl' => '404', 'text' => 'Page Could Not Be Found!');
?>