<?php
require_once __DIR__ . "/../config_session.php";
?>

<div class="offcanvas offcanvas-end" tabindex="-1" id="burger-buttons" aria-labelledby="burger-buttons-tab">
    <div class="offcanvas-header bg-light">
        <h5 aria-label="Kontoübersicht" class="offcanvas-title text-white" id="burger-buttons-tab">Konto</h5>
        <button aria-label="Übersicht schließen" type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <?php if (!isset($_SESSION["user_id"])) {
        require 'header_form_mobile.php';
    } else {
    ?>
    <form action="/homepage" method="POST" class="offcanvas-body bg-light d-flex flex-column gap-5">
        <button type="submit" aria-label="Abmelden" class="btn btn-outline-secondary">Abmelden</button>
    </form>
    <?php }
    ?>
</div>