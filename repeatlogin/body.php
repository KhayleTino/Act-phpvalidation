<main class="login-card">
        <header class="login-header">
            <span class="icon" aria-hidden="true">🔐</span>
            <h1>Welcome!</h1>
            <p>Sign in to your account</p>
        </header>

        <?php if (!empty($errors['login'])): ?>
            <p class="form-status is-error" role="alert"><?php echo htmlspecialchars($errors['login']); ?></p>
        <?php endif; ?>

        <form class="login-form" action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username" autocomplete="username" value="<?php echo htmlspecialchars($username); ?>" required />
                <?php if (!empty($errors['username'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['username']); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-field">
                    <input type="password" id="password" name="password" placeholder="Your password" autocomplete="current-password" required />
                    <button class="toggle-password" type="button" aria-label="Show password" aria-pressed="false">Show</button>
                </div>
                <?php if (!empty($errors['password'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['password']); ?></span>
                <?php endif; ?>
            </div>

            <label class="form-extra">
                <input type="checkbox" name="remember" checked />
                Remember me
            </label>

            <button type="submit" class="btn-login">Sign In</button>
        </form>

        <p class="signup-link">
            Need an account? <a href="register.php">Create one</a>
        </p>
    </main>

    <footer>
        <p>&copy; 2026 de Leon. Some rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            $(".login-card")
                .animate({ opacity: 1 }, 500)
                .queue(function (next) {
                    $(this).addClass("is-visible");
                    next();
                });

            $(".toggle-password").on("click", function () {
                const passwordInput = $("#password");
                const shouldShow = passwordInput.attr("type") === "password";

                passwordInput.attr("type", shouldShow ? "text" : "password");
                $(this)
                    .text(shouldShow ? "Hide" : "Show")
                    .attr("aria-label", shouldShow ? "Hide password" : "Show password")
                    .attr("aria-pressed", shouldShow);
            });
        });
    </script>