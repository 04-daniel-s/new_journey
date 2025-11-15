<?php
require_once __DIR__ . "/../signin/auth_contr.php";
require_once __DIR__ . "/../config_session.php";

if (isset($_SESSION["user_id"])) {
    header("location: homepage");
    die();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {

    $email = trim(htmlspecialchars($_POST["email"]));
    $_SESSION["signup"] = ["email" => $email];

    if (!isValidEmail($email)) {
        require_once __DIR__ . '/../signin/signin_component.php';
        die();
    }

    if (isRegistered($email)) {
        header("location: /login");
        die();
    } else {
        header("location: /register");
        die();
    }
} else {
    if (isset($_SESSION["signup"]["email"])) {
        session_unset();
        session_destroy();
    }

    require_once __DIR__ . '/../signin/signin_component.php';
}
?>
