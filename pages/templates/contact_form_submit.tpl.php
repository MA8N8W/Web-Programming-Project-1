<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <article>
        <?php if(isset($submitmessage)) { echo $submitmessage; }
        else { ?>
            <div style="max-width: 65rem">
                <h3>Form Submitted Successfully.</h3>
                <div style="display: flex; justify-content: center; padding: 10px 0">
                    <div style="display: inline-block; width: calc(50% - 5px); border: 1px solid var(--colour-dark); padding: 10px; margin: 0">Name: <?= (isset($name)) ? htmlspecialchars($name) : "-"?></div>
                    <div style="display: inline-block; width: 10px; height: 1ch margin: 0"></div>
                    <div style="display: inline-block; width: calc(50% - 5px); border: 1px solid var(--colour-dark); padding: 10px; margin: 0">Email: <?= (isset($email)) ? htmlspecialchars($email) : "-"?></div>
                </div>
                <p style="width: 100%; border: 1px solid var(--colour-dark); padding: 10px; margin: 0"><?= htmlspecialchars($content) ?></p>
            </div>
        <?php } ?>
    </article>
</main>