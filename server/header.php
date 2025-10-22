<?php
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
    <link rel="stylesheet" href="style.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

<body class="d-flex flex-column min-vh-100">

<nav role="navigation"
     class="navbar navbar-dark bg-dark fixed-top w-100 d-flex justify-content-center align-content-center">
    <div class="row w-100">
        <div class="col-10 d-flex justify-content-end align-content-center">
            <h1 style="letter-spacing: 0.5rem" class="navbar-brand navbar-dark text-uppercase text-white m-auto">New Journey</h1>
        </div>

        <div class="col-2">
            <button class="d-lg-none btn btn-dark bg-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#burger-buttons" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon navbar-toggler navbar-light"></span>
            </button>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="burger-buttons" aria-labelledby="burger-buttons-tab">
        <div class="offcanvas-header bg-dark">
            <h5 class="offcanvas-title text-white" id="burger-buttons-tab">Konto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body bg-dark d-flex flex-column gap-5">
            <button class="btn btn-outline-secondary">Anmelden</button>
            <button class="btn btn-outline-secondary">Registrieren</button>
        </div>
    </div>
</nav>
