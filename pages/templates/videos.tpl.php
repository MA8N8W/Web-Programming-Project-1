<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/header.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <div class="test">
        <h1>Example of an Embedded Video</h1>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=wZYgDoR8yEOC_jfi&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        <h1>Example of a Hosted Video</h1>
        <p>WIP</p>
        <h1>Bonus; Animated SVG</h1>
        <div class=video style="width: 560px; height: 315px">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 576">
                <rect height="100%" width="100%" fill="#222" />
                <svg id="dvd" height="128px" width="128px" fill="red">
                    <path fill="inherit" d="M20.0325 89.7682a6.6145 6.6145 90 01.9449 0 6.6145 6.6145 90 015.6696 7.5594 6.6145 6.6145 90 01-7.5594 5.6696A6.6145 6.6145 90 0113.418 95.4378a6.6145 6.6145 90 016.8035-5.6696Zm18.3316-16.0638a9.2603 9.2603 90 011.1339.189 9.2603 9.2603 90 017.7484 10.5832 9.2603 9.2603 90 01-10.5832 7.7484 9.2603 9.2603 90 01-7.7484-10.5832 9.2603 9.2603 90 019.4493-7.9374Zm89.5792.9449c-27.9699 0-62.7432 25.3241-72.0035 53.294H42.7108C54.4279 92.603 92.603 64.0661 127.9433 64.0661ZM64.4441 48.0024a16.0638 16.0638 90 012.0788.189 16.0638 16.0638 90 0113.418 18.1426 16.0638 16.0638 90 01-18.1426 13.418 16.0638 16.0638 90 01-13.418-18.1426 16.0638 16.0638 90 0116.0638-13.607Zm25.7021-12.2841a9.2603 9.2603 90 011.1339.189 9.2603 9.2603 90 017.7484 10.5832 9.2603 9.2603 90 01-10.5832 7.7484 9.2603 9.2603 90 01-7.7484-10.5832 9.2603 9.2603 90 019.4493-7.9374Zm18.1426-10.7722a6.6145 6.6145 90 01.9449 0 6.6145 6.6145 90 015.6696 7.5594A6.6145 6.6145 90 01106.9659 38.1751 6.6145 6.6145 90 01101.4853 30.6157a6.6145 6.6145 90 016.8035-5.6696ZM85.4215 0C73.5154 35.3403 35.3403 64.0661 0 64.0661v-10.5832C27.9699 53.294 62.7432 27.9699 72.0035 0Z"></path>
                    <animate id="xAnim" attributeName="x" dur="9" values="0%;87.5%;0%" repeatCount="indefinite" />
                    <animate id="yAnim" attributeName="y" dur="10" values="0%;77.7%;0%" repeatCount="indefinite" />
                    <animate attributeName="fill" values="#ff0" begin="xAnim.repeatEvent" repeatCount="indefinite" dur="0s" />
                    <animate attributeName="fill" values="#0ff" begin="yAnim.repeatEvent" repeatCount="indefinite" dur="0s" />
                    <animate attributeName="fill" values="#f0f" begin="xx.repeatEvent" repeatCount="indefinite" dur="0s" />
                    <animate attributeName="fill" values="#0f0" begin="yy.repeatEvent" repeatCount="indefinite" dur="0s" />
                    <!-- 		empty animations for triggering color changes -->
                    <animate id="xx" begin="-4.5s" repeatCount="indefinite" dur="9s" />
                    <animate id="yy" begin="-5s" repeatCount="indefinite" dur="10s" />
                </svg>
            </svg>
        </div>
    </div>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
