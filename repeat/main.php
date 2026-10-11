<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <main>
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-8">
                    <p class="eyebrow mb-3">A space for your next chapter</p>
                    <h1 class="mb-4">Welcome, <span id="welcome-name"><?php echo htmlspecialchars($_SESSION['username'] ?? 'there', ENT_QUOTES, 'UTF-8'); ?></span>!</h1>
                    <p class="hero-copy mb-4">
                        Your personal space is ready. Make room for what matters and pick
                        up where you left off.
                    </p>
                    <a class="btn btn-primary btn-lg px-4" href="#features">Explore your space</a>
                </div>
                <div class="col-lg-4">
                    <div class="row g-3" id="features">
                        <div class="col-sm-6 col-lg-12">
                            <article class="feature">
                                <span class="feature-icon">🔐</span>
                                <h2 class="h5">Your space</h2>
                                <p>Keep your account close and your experience personal.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <article class="feature">
                                <span class="feature-icon">✨</span>
                                <h2 class="h5">Simple by design</h2>
                                <p>Everything you need to begin.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>