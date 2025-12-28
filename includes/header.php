<?php
require_once "config_session.php";
require_once "signin/auth_contr.php";

if(isset($_POST["logout"])) {
    logout();
    exit();
}

$title = isset($pageTitle) && is_string($pageTitle) ? $pageTitle : 'New Journey';
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <nav aria-label="Navigation" role="navigation" style="height: 10vh"
         class="navbar navbar-light bg-light fixed-top w-100 d-flex justify-content-center align-content-center bg-opacity-75">

        <div style="padding-left:2rem" class="row w-100 d-flex">
            <a style="text-decoration: none" href="/"
               class="col-4 col-md-6 d-flex justify-content-md-end align-content-center">
                <h1 aria-label="New Journey" style="letter-spacing: 0.5rem"
                    class="navbar-brand navbar-light text-uppercase text-dark m-auto">
                    New Journey
                </h1>
            </a>

            <?php if (!isset($_SESSION["user"]["id"])) {
                require 'components/header_form.php';
            } else { ?>
                <form action="/" method="POST" class="d-none col-md-6 d-md-flex justify-content-end px-5 gap-3">
                    <input id="logout" name="logout" value="1" hidden="hidden">
                    <button type="submit" aria-label="Abmelden" class="btn btn-dark">Abmelden</button>
                </form>
                <?php
            }
            ?>

            <div class="col-8 d-flex justify-content-end">
                <button aria-label="Menü" class="d-md-none btn btn-light bg-light" type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#burger-buttons" aria-controls="burger-buttons-tab">
                    <span class="navbar-toggler-icon navbar-toggler navbar-light"></span>
                </button>
            </div>
            <?php require 'components/burger_window.php'; ?>
        </div>
    </nav>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

<body class="d-flex flex-column min-vh-100">
