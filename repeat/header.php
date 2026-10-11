<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Leon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --night: #0f0c29;
            --violet: #302b63;
            --lavender: #a78bfa;
            --soft-white: rgba(255, 255, 255, 0.72);
        }
        * {
            box-sizing: border-box;
        }
        body {
            display: block;
            min-height: 100vh;
            color: #ffffff;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at 15% 20%, rgba(102, 126, 234, 0.3), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(167, 139, 250, 0.2), transparent 28%),
                linear-gradient(135deg, var(--night), var(--violet), #24243e);
        }
        .navbar {
            background: rgba(15, 12, 41, 0.55);
            backdrop-filter: blur(12px);
        }
        .brand-mark {
            color: #ffffff;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-decoration: none;
        }
        .hero {
            min-height: calc(100vh - 73px);
            display: flex;
            align-items: center;
            padding: 5rem 0;
        }
        .eyebrow {
            color: var(--lavender);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }
        .hero h1 {
            max-width: 680px;
            font-size: clamp(2.8rem, 7vw, 5.8rem);
            font-weight: 700;
            line-height: 0.98;
        }
        .hero-copy {
            max-width: 560px;
            color: var(--soft-white);
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .btn-primary {
            --bs-btn-bg: #667eea;
            --bs-btn-border-color: #667eea;
            --bs-btn-hover-bg: #7b93f5;
            --bs-btn-hover-border-color: #7b93f5;
            box-shadow: 0 10px 24px rgba(102, 126, 234, 0.3);
        }
        .feature {
            height: 100%;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 1rem;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            opacity: 0;
            transform: translateY(14px);
            transition: transform 0.55s ease;
        }
        .feature.is-visible {
            transform: translateY(0);
        }
        .feature-icon {
            display: inline-flex;
            width: 2.8rem;
            height: 2.8rem;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            border-radius: 0.85rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-size: 1.3rem;
        }
        .feature p {
            color: var(--soft-white);
            margin-bottom: 0;
        }
        footer {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>