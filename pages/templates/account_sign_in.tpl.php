<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
if(isset($USER)) {
    header('Refresh: 2; URL = index.php');
} else {
    header('Refresh: 2; URL= login');
}
?>
<main id="main-content" tabindex="-1" class="wrapper" style="align-content: center; margin-bottom: 20vh;">
    <div class="wrapper" style="text-align: center">
        <?php if(isset($USER)) { ?>
            <h1>Welcome,</h1>
            <?php if($_SESSION['admin'] == 1) { ?>
                <h3>Administrator
            <?php } else { ?>
                <h3>
            <?php } ?>
            <?php if($_SESSION['firstName'] != "" && $_SESSION['lastName'] != "" ) { ?>
                <?= $_SESSION['firstName']." ".$_SESSION['lastName'] ?></h3>
            <?php } else { ?>
                <?= $_SESSION['userName'] ?></h3>
            <?php } ?>
        <?php } else { ?>
            <h3>Invalid username or password</h3>
            <p>If you're not automatically redirected click the link below:</p>
            <a href="login" style="font-weight: 600; color: var(--colour-primary)">Try Again</a>
        <?php } ?>
        <?php if(isset($errormessage)) { ?>
            <h2><?= $errormessage ?></h2>
        <?php } ?>
    </div>
</main>