<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/navigation.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
    <article>
        <h3>Contact Us</h3>
        <p>If you wish to leave a message for us, you can do so with the form below.</p>
        <form id="messageForm" action="contact_form_submit" method="post">
            <?php if(!isset($_SESSION['id'])) { ?>
                <div class="informationmessage">
                    <p>You're currently not signed in, submitted messages will be displayed as GUEST.</p>
                    <p>You may optionally leave a name and email address.</p>
                    <p>Click <a href="login"><i>here</i></a> if you wish to sign in.</p>
                </div>
            <?php } ?>
            <div id="errormessage" class="errormessage">
                <p>! If you can read this message, JavaScript may be disabled.</p>
            </div>
            <div>
                <?php if(!isset($_SESSION['id'])) { ?>
                    <div class="singleline">
                        <fieldset id="namefieldset">
                            <legend id="namelegend">Name<abbr title="If you decide to include a name, it must be at minimum 5 characters."><strong><sup>!</sup></strong></abbr></legend>
                            <input type="text" id="name" name="name" size="20" maxlength="40">
                        </fieldset>
                        <div class="spacer"></div>
                        <fieldset id="emailfieldset">
                            <legend id="emaillegend">Email Address</legend>
                            <input type="text" id="email" name="email" size="30" maxlength="40">
                        </fieldset>
                    </div>
                <?php } ?>
                <fieldset id="contentfieldset">
                    <legend id="contentlegend">Message Content<abbr title="Required">*</abbr></legend>
                    <textarea id="content" name="content" cols="40" rows="10"></textarea>
                </fieldset>
                <br/>
                <button id="submit" type="submit" onclick="submitForm()">Submit</button>
            </div>
        </form>
    </article>
</main>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
<?php if(!isset($_SESSION['id'])) { ?>
    <script type="text/javascript" src="js/guest_contactform.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="js/user_contactform.js"></script>
<?php } ?>