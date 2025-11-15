<div class="position-relative">
    <div style=" margin-bottom: 7rem" class="bg-light">
        <div id="searchbar" class="hero-image d-block w-100 d-flex flex-column justify-content-around gap-5">
            <img alt="Bild mit Reisenden" src="/img/hero.jpg" class="hero-image img-fluid z-n1"/>

            <div style="height: 45vh;" class="header-padding pt-5 mt-5 w-100 position-absolute d-flex flex-column">
                <h1 style="font-size: 3.5rem; color: rgb(65,65,65); letter-spacing: 0.3rem; text-shadow: 0 4px 24px rgba(255,255,255,0.5);"
                    class="mb-5 m-lg-0 fw-bold text-center text-lg-start">Unterkunft buchen</h1>

                <h3 class="d-none d-lg-block"
                    style="text-shadow: 0 4px 24px rgba(255,255,255,0.5); margin-bottom: 15%;">Finde eine
                    passende Unterkunft für deine nächste Reise</h3>

                <?php require_once __DIR__ . '/../components/search_bar.php'; ?>

            </div>
        </div>
    </div>

    <div style="background: #26de82; letter-spacing: 0.7rem; padding: 2.3rem;"
         class="w-100 text-uppercase d-flex align-content-enter justify-content-center text-black">Bist du neu?
    </div>

    <section style="background-color: #f8fafc; padding-top: 7rem;" class="px-5 d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-around w-100 pb-5 gap-5">
        <?php for ($j = 0; $j < 3; $j++) {
            require __DIR__ . '/../components/appartment_card.php';
        } ?>
    </section>
</div>

