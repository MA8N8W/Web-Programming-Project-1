<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper" style="align-content: center; margin-bottom: 20vh;">
    <div class="wrapper">
        <?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h1>Welcome,</h1>
                <h2><?= $row['uto_nev']." ".$row['csaladi_nev'] ?></h2>
            <?php } else { ?>
                <h1>A bejelentkezés nem sikerült!</h1>
                <a href="login" >Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
        <?php if(isset($errormessage)) { ?>
            <h2><?= $errormessage ?></h2>
        <?php } ?>
    </div>
</main>
