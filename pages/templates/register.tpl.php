<main id="main-content" tabindex="-1">
    <article class="accountprompt">
        <h3>Register an account</h3>
        <form action="../../index.php" method="post">
            <div class="register">
                <fieldset>
                    <legend>First Name</legend>
                    <input type="text" id="firstname" name="firstname">
                </fieldset>
                <fieldset>
                    <legend>Last Name</legend>
                    <input type="text" id="lastname" name="lastname">
                </fieldset>
                <fieldset>
                    <legend>User Name*</legend>
                    <input type="text" id="username" name="username" required>
                </fieldset>
                <fieldset>
                    <legend>Password*</legend>
                    <input type="password" id="password" name="password" required>
                </fieldset>
                <fieldset>
                    <legend>Repeat Password*</legend>
                    <input type="password" id="passwordcheck" name="passwordcheck" required>
                </fieldset>
                <input type="checkbox">
                <br>
                <button type="submit">Sign Up</button>
            </div>
        </form>
        <p style="font-size: 0.9rem; font-weight: 500;">
            <span>Don't have an account?</span>
            <a href="./login" tabindex="0" role="button" style="text-decoration: none; font-weight: 600; color: var(--colour-primary)">
                <span>Log In</span>
            </a>
        </p>
    </article>
</main>
