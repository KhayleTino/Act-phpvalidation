<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            color: #ffffff;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        }
        .register-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 2rem;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(16px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            opacity: 0;
            transform: translateY(12px);
            transition: transform 0.45s ease;
        }
        .register-card.is-visible {
            transform: translateY(0);
        }
        .register-header {
            margin-bottom: 1.8rem;
            text-align: center;
        }
        .register-header .icon {
            display: inline-block;
            margin-bottom: 0.4rem;
            padding: 0.6rem 1rem;
            border-radius: 1.2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
            font-size: 2.5rem;
        }
        .register-header h1 {
            margin-top: 0.6rem;
            font-size: 2rem;
        }
        .register-header p {
            margin-top: 0.25rem;
            color: rgba(255, 255, 255, 0.55);
            font-size: 0.95rem;
        }
        .register-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }
        .form-group label {
            padding-left: 0.25rem;
            color: rgba(255, 255, 255, 0.75);
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }
        .form-group input {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 1rem;
            outline: none;
            background: rgba(255, 255, 255, 0.07);
            color: #ffffff;
            font: inherit;
            transition: all 0.3s ease;
        }
        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }
        .form-group input:focus {
            border-color: #667eea;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
        }
        .password-field {
            position: relative;
        }
        .password-field input {
            padding-right: 4.5rem;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 0.9rem;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #c4b5fd;
            cursor: pointer;
            font: inherit;
            font-size: 0.85rem;
        }
        .btn-register {
            margin-top: 0.3rem;
            padding: 0.9rem;
            border: 0;
            border-radius: 1rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            box-shadow: 0 8px 24px rgba(102, 126, 234, 0.25);
            color: #ffffff;
            cursor: pointer;
            font: inherit;
            font-size: 1.05rem;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
        }
        .btn-register:disabled {
            cursor: wait;
            opacity: 0.75;
        }
        .form-status {
            color: #c4b5fd;
            font-size: 0.9rem;
            text-align: center;
        }
        .form-status.is-error,
        .field-error {
            color: #ffb4ab;
        }
        .form-status.is-success {
            color: #a7f3d0;
        }
        .form-group input.is-invalid {
            border-color: #ffb4ab;
        }
        .signin-link {
            margin-top: 1.5rem;
            color: rgba(255, 255, 255, 0.55);
            font-size: 0.95rem;
            text-align: center;
        }
        .signin-link a {
            color: #c4b5fd;
            font-weight: 600;
            text-decoration: none;
        }
        footer {
            width: 100%;
            margin-top: 1.5rem;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
            text-align: center;
        }
        @media (max-width: 480px) {
            .register-card {
                padding: 2rem 1.5rem;
            }
            .register-header h1 {
                font-size: 1.6rem;
            }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                transition-duration: 0.01ms !important;
            }
        }
    </style>