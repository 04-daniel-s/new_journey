<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin-email"])) {
    $email = trim($_POST["signin-email"]);
    $isRegistered = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        require __DIR__ . '/components/signin-component.php';
        exit;
    }

    if ($email == "test@gmail.com") {
        $isRegistered = true;
    }

    if ($isRegistered) {
        require __DIR__ . '/components/login.php';
    } else {
        require __DIR__ . '/components/register.php';
    }
} else {
    require __DIR__ . '/components/signin-component.php';
}
?>
