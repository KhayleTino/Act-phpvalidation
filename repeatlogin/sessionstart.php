<?php
session_start();

//Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

$errors = [];
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    //Validate username with regex
    if (!preg_match('/^[A-Za-z0-9_]{2,50}$/', $username)) {
        $errors['username'] = 'Username must be 2-50 characters and contain only letters, numbers, and underscores.';
    }

    //validate password
    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    }


    if (empty($errors)) {
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['username'] = $username;
        $_SESSION['authenticated'] = true;
        header("Location: landing.php");
        exit;
    } elseif ($username === 'user' && $password === 'password') {
        $_SESSION['username'] = $username;
        $_SESSION['authenticated'] = true;
        header("Location: landing.php");
        exit;
    } elseif ($username === 'guest' && $password === 'guest') {
        $_SESSION['username'] = $username;
        $_SESSION['authenticated'] = true;
        header("Location: landing.php");
        exit;
    } else {
        $errors['login'] = 'Invalid username or password.';
    }
}
}
?>