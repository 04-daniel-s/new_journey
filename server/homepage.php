<div class="position-relative">
    <div>
        <div class="hero-image d-block w-100 d-flex flex-column justify-content-around gap-5">
            <img alt="Bild mit Reisenden" src="./img/hero.jpg" class="hero-image img-fluid z-n1"/>

            <div style="padding: 0 17% 0 17%; top:20%; height: 25%" class="mb-5 m-lg-0 w-100 position-absolute d-flex flex-column">
                <h1 style="font-size: 3.5rem; color: rgb(65,65,65); letter-spacing: 0.3rem; text-shadow: 0 4px 24px rgba(255,255,255,0.5);"
                    class="mb-5 m-lg-0 fw-bold">Unterkunft buchen</h1>

                <h3 class="d-none d-lg-block"
                    style="text-shadow: 0 4px 24px rgba(255,255,255,0.5); opacity: 0.9; margin-bottom: 15%;">Finde eine
                    passende Unterkunft für deine nächste Reise</h3>

                <?php include 'components/search_bar.php'; ?>
            </div>
        </div>
    </div>

    <div style="background: rgb(39,223,129); margin-top: 7rem; margin-bottom: 5rem; letter-spacing: 0.7rem; padding: 2.3rem;"
         class="w-100 text-uppercase d-flex align-content-enter justify-content-center">Bist du neu?
    </div>

    <div class="row px-5 d-flex align-content-center justify-content-around">
        <?php for ($i = 0; $i < 3; $i++) {
            include 'components/appartment_card.php';
        } ?>
    </div>
</div>

