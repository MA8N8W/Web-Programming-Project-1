<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/navigation.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <article>
        <?php if (isset($_SESSION['id'])) { ?>
            <h3 style="text-align: center">Messages by our Users & Visitors</h3>
            <br/>
            <?php foreach ($stmt->fetchAll() as $row) { ?>
                <table class="message">
                    <tbody>
                        <tr>
                            <?php if ($row['id'] == 0) { ?>
                                <td><strong>GUEST - <?= htmlspecialchars($row['guest_name'])?></strong></td>
                                <td><?= htmlspecialchars($row['guest_email'])?></td>
                            <?php } else { ?>
                                <td><strong><?= ($row['is_admin'] == 1) ? "ADMIN -" : "" ?><?= htmlspecialchars($row['user_name'])?></strong></td>
                                <td><?= htmlspecialchars($row['email_address'])?></td>
                            <?php } ?>
                            <td><?= date_format(new DateTime($row["post_timestamp"]),'Y/m/d H:i:s')?></td>
                        </tr>
                        <tr class="content">
                            <td colspan="4"><?= htmlspecialchars($row['message'])?></td></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
        <?php } else { ?>
            <div style="text-align: center">
                <h3>You're currently not signed in.</h3>
                <p>Only logged in members may view messages left by other members and guests.</p>
            </div>
        <?php } ?>
    </article>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>