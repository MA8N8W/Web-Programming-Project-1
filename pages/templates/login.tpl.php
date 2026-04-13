<?php
if(file_exists("./pages/common/altheader.php")) { include("./pages/common/altheader.php"); }
?>
<main id="main-content" tabindex="-1" class="wrapper">
        <article class="accountprompt">
            <h3>Log in to your account</h3>
            <form action="belep" method="post">
                <div class="login">
                    <fieldset>
                        <legend>Username</legend>
                        <input type="text" id="username" name="username" required>
                    </fieldset>
                    <fieldset>
                        <legend>Password</legend>
                        <input type="password" id="password" name="password" required>
                    </fieldset>
                    <button type="submit">Sign In</button>
                </div>
            </form>
            <p style="font-size: 0.9rem; font-weight: 500;">
                <span>Don't have an account?</span>
                <a href="./register" tabindex="0" role="button" style="text-decoration: none; font-weight: 600; color: var(--colour-primary)">
                    <span>Sign Up</span>
                </a>
            </p>
        </article>
</main>
