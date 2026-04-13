<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['file'].'.php')) { include("./logicals/{$keres['file']}.php"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$windowtitle['title']?></title>
    <link rel="icon" type="image/svg+xml" href="./images/logo.svg" >
    <link rel="stylesheet" href="./styles/reset.css" type="text/css">
    <link rel="stylesheet" href="./styles/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php if(file_exists('./styles/'.$keres['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['file']?>.css" type="text/css"><?php } ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<?php include("./pages/templates/{$keres['file']}.tpl.php"); ?>
</body>
</html>
