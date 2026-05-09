<?php
    // Alkalmazás logika:
    include('./galleryconfig.php');
    
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir("./kepek/");
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file("./kepek/".$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime("./kepek/".$fajl);
        }
    closedir($olvaso);
    
    // Megjelenítés logika:

if (file_exists("./pages/common/header.php")) {
    include("./pages/common/header.php");
}
if (file_exists("./pages/common/navigation.php")) {
    include("./pages/common/navigation.php");
}
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <div id="galeria">
        <h1>Galéria</h1>
        <a id=feltolt class="button" href="feltolt">Kép feltöltése</a>
        <?php
        arsort($kepek);
        foreach($kepek as $fajl => $datum)
        {
        ?>
            <div class="kep">
                <a href="<?php echo "./kepek/".$fajl ?>">
                    <img src="<?php echo "./kepek/".$fajl ?>">
                </a>
                <p><abbr title="<?php echo $fajl; ?>"><?php echo $fajl; ?></abbr></p>
                <p><?php echo date($DATUMFORMA, $datum); ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
