<?php
$ablakcim = array(
    'cim' => 'Rubbish',
);

$header = array(
    'imgsrc' => 'logo.svg',
    'imgalt' => 'logo',
	'cim' => 'Rubbish',
	'motto' => 'lkjd asldj sapi sd'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Non-existant Company Inc.'
);

$pages = array(
	'/' => array('file' => 'home', 'szoveg' => 'Home', 'menun' => array(1,1)),
    'contact' => array('file' => 'contact', 'szoveg' => 'Contact', 'menun' => array(1,1)),
    'gallery' => array('file' => 'gallery', 'szoveg' => 'Gallery', 'menun' => array(1,1)),
    'videos' => array('file' => 'videos', 'szoveg' => 'Videos', 'menun' => array(1,1)),
	'messages' => array('file' => 'messages', 'szoveg' => 'Messages', 'menun' => array(1,1)),
    'tablazat' => array('file' => 'tablazat', 'szoveg' => 'Database', 'menun' => array(1,1)),
    'login' => array('file' => 'login', 'szoveg' => 'Log In', 'menun' => array(1,0)),
    'kilepes' => array('file' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('file' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('file' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'register' => array('file' => 'register', 'szoveg' => 'Register', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>