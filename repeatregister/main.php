 <main class="register-card">
        <header class="register-header">
            <span class="icon" aria-hidden="true">✨</span>
            <h1>Create account</h1>
            <p>Set up your personal space</p>
        </header>

        <?php if (!empty($success)): ?>
            <p class="form-status is-success" role="alert"><?php echo $success; ?></p>
        <?php endif; ?>

        <form class="register-form" action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" autocomplete="username" value="<?php echo htmlspecialchars($username); ?>" required />
                <?php if (!empty($errors['username'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['username']); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" value="<?php echo htmlspecialchars($email); ?>" required />
                <?php if (!empty($errors['email'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['email']); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-field">
                    <input type="password" id="password" name="password" placeholder="Create a password" autocomplete="new-password" required />
                    <button class="toggle-password" type="button" aria-label="Show password" aria-pressed="false">Show</button>
                </div>
                <?php if (!empty($errors['password'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['password']); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="password-field">
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Enter your password again" autocomplete="new-password" required />
                    <button class="toggle-password" type="button" aria-label="Show password" aria-pressed="false">Show</button>
                </div>
                <?php if (!empty($errors['confirm-password'])): ?>
                    <span class="field-error"><?php echo htmlspecialchars($errors['confirm-password']); ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn-register">Create Account</button>
        </form>

        <p class="signin-link">
            Already have an account? <a href="login.php">Sign in</a>
        </p>
    </main>