<?php
session_start();

$errors = [];
$username = '';
$email = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm-password'] ?? '';

    //username validation
    if (!preg_match('/^[A-Za-z0-9_]{2,50}$/', $username)) {
        $errors['username'] = 'Username must be 2-50 characters and contain only letters, numbers, and underscores.';
    }

    //email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    //password validation
    if (strlen($password) < 6 || strlen($password) > 50) {
        $errors['password'] = 'Password must be between 6 and 50 characters.';
    } elseif (!preg_match('/[0-9]/', $password)) {
        $errors['password'] = 'Password must contain at least one number.';
    } elseif (!preg_match('/[^A-Za-z0-9]/', $password)) {
        $errors['password'] = 'Password must contain at least one special character.';
    }

   
    if ($password !== $confirm) {
        $errors['confirm-password'] = 'Passwords do not match.';
    }

    if (empty($errors)) {
    
        $success = 'Registration successful! You can now <a href="login.php">sign in</a>.';
    }
}
?>