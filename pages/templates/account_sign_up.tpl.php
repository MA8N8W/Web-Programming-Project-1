<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
if($again) {
    header('Refresh: 4; URL = register');
} else {
    header('Refresh: 2; URL= login');
}
?>
<main id="main-content" tabindex="-1" class="wrapper" style="align-content: center; margin-bottom: 20vh;">
    <div class="wrapper" style="text-align: center">
        <?php if(isset($message)) { ?>
            <h3><?= $message ?></h3>
            <p>If you're not automatically redirected click the link below:</p>
            <?php if($again) { ?>
                <a href="register" style="font-weight: 600; color: var(--colour-primary)">Try Again</a>
            <?php } else { ?>
                <a href="login" style="font-weight: 600; color: var(--colour-primary)">Continue to Sign In</a>
            <?php } ?>
        <?php } ?>
    </div>
</main>