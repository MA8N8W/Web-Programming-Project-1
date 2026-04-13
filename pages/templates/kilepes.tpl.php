<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper" style="align-content: center; margin-bottom: 20vh;">
    <div class="wrapper">
        <h1>Goodbye</h1>
        <?= $data['csn']." ".$data['un']." (".$data['login'].")" ?>
    </div>
</main>
