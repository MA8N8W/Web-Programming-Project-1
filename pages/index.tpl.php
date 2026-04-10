<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['file'].'.php')) { include("./logicals/{$keres['file']}.php"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$ablakcim['cim']?></title>
    <link rel="icon" type="image/svg+xml" href="./images/logo.svg" >
    <link rel="stylesheet" href="./styles/reset.css" type="text/css">
    <link rel="stylesheet" href="./styles/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php if(file_exists('./styles/'.$keres['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['file']?>.css" type="text/css"><?php } ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<?php if ($page == 'belepes' || $page == 'login' || $page == 'register'): ?>
    <header class="site-head-logreg" role="banner">
        <div class="wrapper">
            <div class="site-head-inner">
                <a href="./index.php" class="site-head-brand">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 67.73 67.73">
                            <g fill="currentColor">
                                <circle cx="-33.87" cy="-12.7" r="6.35"/>
                                <circle cx="-42.86" cy="-3.7" r="3.7"/>
                                <circle cx="-49.21" cy="2.65" r="2.65"/>
                                <circle cx="24.87" cy="21.7" r="3.7" transform="scale(-1)"/>
                                <circle cx="18.52" cy="28.05" r="2.65" transform="scale(-1)"/>
                            </g>
                            <g fill="var(--colour-primary)">
                                <path d="M67.73 33.87c-18.7 0-38.92 15.16-45.15 33.86h7.05c4.94-14.8 23.3-28.22 38.1-28.22zM38.1 0C33.16 14.8 14.8 28.22 0 28.22v5.65C18.7 33.87 38.92 18.7 45.15 0z"/>
                                <g transform="rotate(8.7 113.62 -34.6)scale(1.333)">
                                    <circle cx="33.87" cy="33.87" r="6.35"/>
                                    <circle cx="24.87" cy="42.86" r="3.7"/>
                                    <circle cx="18.52" cy="49.21" r="2.65"/>
                                    <circle cx="-42.86" cy="-24.87" r="3.7" transform="scale(-1)"/>
                                    <circle cx="-49.21" cy="-18.52" r="2.65" transform="scale(-1)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </header>
<?php else: ?>
    <header class="site-head" role="banner">
        <div class="wrapper">
            <div class="site-head-inner">
                <a href="./index.php" class="site-head-brand">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 67.73 67.73">
                            <g fill="currentColor">
                                <circle cx="-33.87" cy="-12.7" r="6.35"/>
                                <circle cx="-42.86" cy="-3.7" r="3.7"/>
                                <circle cx="-49.21" cy="2.65" r="2.65"/>
                                <circle cx="24.87" cy="21.7" r="3.7" transform="scale(-1)"/>
                                <circle cx="18.52" cy="28.05" r="2.65" transform="scale(-1)"/>
                            </g>
                            <g fill="var(--colour-light)">
                                <path d="M67.73 33.87c-18.7 0-38.92 15.16-45.15 33.86h7.05c4.94-14.8 23.3-28.22 38.1-28.22zM38.1 0C33.16 14.8 14.8 28.22 0 28.22v5.65C18.7 33.87 38.92 18.7 45.15 0z"/>
                                <g transform="rotate(8.7 113.62 -34.6)scale(1.333)">
                                    <circle cx="33.87" cy="33.87" r="6.35"/>
                                    <circle cx="24.87" cy="42.86" r="3.7"/>
                                    <circle cx="18.52" cy="49.21" r="2.65"/>
                                    <circle cx="-42.86" cy="-24.87" r="3.7" transform="scale(-1)"/>
                                    <circle cx="-49.21" cy="-18.52" r="2.65" transform="scale(-1)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <?php if(isset($_SESSION['login'])) { ?>Logged in: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
    </header>
    <div class="navigation" id="mainNav">
        <div class="wrapper">
            <ul role="list">
                <?php foreach ($pages as $url => $page) { ?>
                    <?php if(! isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
                        <li<?= (($page == $keres) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : $url ?>" data-hover="<?= $page['szoveg'] ?>">
                                <?= $page['szoveg'] ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <li class="menuButton">
                    <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<?php endif; ?>
<main id="main-content" tabindex="-1" class="wrapper">
    <div id="wrapper">
        <div id="content">
            <?php include("./pages/templates/{$keres['file']}.tpl.php"); ?>
        </div>
    </div>
</main>
<footer>
    <div class="wrapper">
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
        &nbsp;
        <?php if(isset($footer['ceg'])) { ?><?= $footer['ceg']; ?><?php } ?>
    </div>
</footer>
<script>
    function toggleMenu() {
        var x = document.getElementById("mainNav");
        if (x.className === "navigation") {
            x.className += " responsive";
        } else {
            x.className = "navigation";
        }
    }
    function activeMenu() {
        var x = document.getElementById("mainNav");
        if
    }
</script>
</body>
</html>
