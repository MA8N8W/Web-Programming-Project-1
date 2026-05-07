<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper" xmlns="http://www.w3.org/1999/html">
    <article class="accountprompt">
        <h3>Register an account</h3>
        <form action="account_sign_up" method="post">
            <div class="form">
                <div class="singleline">
                    <fieldset>
                        <legend>User Name*</legend>
                        <input type="text" id="username" name="username" required>
                    </fieldset>
                    <div class="spacer"></div>
                    <fieldset>
                        <legend>Email Address*</legend>
                        <input type="email" id="email" name="email" required>
                    </fieldset>
                </div>
                <div class="singleline">
                    <fieldset>
                        <legend>First Name</legend>
                        <input type="text" id="firstname" name="firstname">
                    </fieldset>
                    <div class="spacer"></div>
                    <fieldset>
                        <legend>Last Name</legend>
                        <input type="text" id="lastname" name="lastname">
                    </fieldset>
                </div>
                <div class="singleline">
                    <fieldset style="width: calc(70% - 5px)">
                        <legend>Middle Name</legend>
                        <input type="text" id="middlename" name="middlename">
                    </fieldset>
                    <div class="spacer"></div>
                    <fieldset style="width: calc(30% - 5px)">
                        <legend>Date Of Birth</legend>
                        <input type="date" id="birthdate" name="birthdate">
                    </fieldset>
                </div>
                <div class="singleline">
                    <fieldset>
                        <legend>Password*</legend>
                        <input type="password" id="password" name="password" required>
                    </fieldset>
                    <div class="spacer"></div>
                    <fieldset>
                        <legend>Repeat Password*</legend>
                        <input type="password" id="passwordcheck" name="passwordcheck" required>
                    </fieldset>
                </div>
                <div style="text-align: left; padding: 5px 0 0 0">
                    <input type="checkbox" id="tos" name="tos" style="text-align: left">
                    <label for="tos" style="text-align: left">I have read and accept the Terms Of Service</label>
                </div>
                <br>
                <button type="submit">Sign Up</button>
            </div>
        </form>
        <p style="font-size: 0.9rem; font-weight: 500; text-align: center">
            <span>Don't have an account?</span>
            <a href="./login" tabindex="0" role="button" style="text-decoration: none; font-weight: 600; color: var(--colour-primary)">
                <span>Log In</span>
            </a>
        </p>
    </article>
</main>
<script>
    <?php if(file_exists("./pages/common/validationscript.php")) { include("./pages/common/validationscript.php"); }?>
</script>
