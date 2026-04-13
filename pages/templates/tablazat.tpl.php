<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/header.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <div class="test">
        <table>
            <caption>5. gyakorlat 1. feladat:<br>TÁBLÁZAT</caption>
            <tr>
                <th>Employee</th>
                <th>Salary</th>
                <th>Bonus</th>
                <th>Supervisor</th>
            </tr>
            <tr>
                <td>Stephen C. Cox</td>
                <td>$300</td>
                <td>$50</td>
                <td>Bob</td>
            </tr>
            <tr>
                <td>Josephin Tan</td>
                <td>$150</td>
                <td>-</td>
                <td>Annie</td>
            </tr>
            <tr>
                <td>Joyce Ming</td>
                <td>$200</td>
                <td>$35</td>
                <td>Andy</td>
            </tr>
            <tr>
                <td>James A. Pentel</td>
                <td>$175</td>
                <td>$25</td>
                <td>Annie</td>
            </tr>
        </table>
    </div>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
