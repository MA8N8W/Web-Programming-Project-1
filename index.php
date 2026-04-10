<?php
    include('./includes/config.inc.php');
	$page = $_SERVER['QUERY_STRING'];
	if ($page !="") {
		if (isset($pages[$page]) && file_exists("./pages/templates/{$pages[$page]['file']}.tpl.php")) {
			$keres = $pages[$page];
		}
		else { 
			$keres = $hiba_oldal;
			header("HTTP/1.0 404 Not Found");
		}
	}
	else $keres = $pages['/'];
	include('./pages/index.tpl.php');
?>