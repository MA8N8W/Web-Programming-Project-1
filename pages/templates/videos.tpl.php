<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/header.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <div class="test">
        <h1>Example of an Embedded Video</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=wZYgDoR8yEOC_jfi&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h1>Example of a Hosted Video</h1>
        <p>WIP</p>
    </div>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
