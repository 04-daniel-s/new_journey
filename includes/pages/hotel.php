<?php
require_once __DIR__ . "/../config_session.php";

if (!isset($_SESSION["user_id"])) {
    header("location: /login");
    die();
}

?>

<main class="h-100 d-flex justify-content-center">
    <div style="width: 65%" class="border border-light my-3 p-3 d-flex flex-column">
        <section class="d-flex flex-row justify-content-between border-bottom border-light gap-2 pb-3">
            <div class="w-75">
                <img class="w-100" alt="Vorschaubild der Unterkunft" src="/img/room-dark.avif">
            </div>
            <div class="d-flex flex-column gap-2 w-25 pb-4">
                <img alt="Vorschaubild der Unterkunft" src="/img/room.webp">
                <img alt="Vorschaubild der Unterkunft" src="/img/room.webp">
            </div>
        </section>
        <section class="d-flex gap-3 flex-wrap">
            <div class="border border-dark py-2 px-4 d-flex gap-2">
                <span class="bi bi-bar-chart"></span>
                <span>WLAN</span>
            </div>
            <div class="border border-dark py-2 px-4 d-flex gap-2">
                <span class="bi bi-brightness-high"></span>
                <span>Klimaanlage</span>
            </div>
            <div class="border border-dark py-2 px-4 d-flex gap-2">
                <span class="bi bi-controller"></span>
                <span>Spielekonsolen</span>
            </div>
        </section>
        <section class="d-flex justify-content-between py-4 border-bottom border-light">
            <section style="width: 80%">
                <div class="pb-4">
                    <h2 class="h2 m-0">Hotel Zimmer XL</h2>
                    <h6 class="h6 text-muted">Musterstraße 3, Wien 1190</h6>
                </div>
                <h6 style="font-weight: 300" class="h6">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et
                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum.
                    Stet
                    clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                    amet,
                    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam
                    erat,
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                    gubergren,
                    no
                    sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et
                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum.
                    Stet
                    clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                    amet,
                    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam
                    erat,
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                    gubergren,
                    no
                    sea takimata sanctus est Lorem ipsum dolor sit amet.</h6>
            </section>
            <div class="d-flex flex-column align-items-end">
                <h5 style="font-size:1.3rem; background-color: rgb(145, 237, 191)"
                    class="badge text-dark p-2 px-3">300 €</h5>
                <div class="d-flex flex-row gap-1">
                    <span class="bi-star-fill"></span>
                    <span class="bi-star-fill"></span>
                    <span class="bi-star-fill"></span>
                    <span class="bi-star-fill"></span>
                    <span class="bi-star-fill"></span>
                </div>
                <h6 class="h6 fw-bold">5912 Bewertungen</h6>
                <span class="h6 text-muted">Geeignet für 2 Personen</span>
            </div>
        </section>
        <section class="py-5 border-bottom border-light">
            <section>
                <h2 class="h2">Bewertungen</h2>
                <h6 class="h6 text-muted pb-5">
                    Hier erhältst du Einsicht auf kategorisierte Bewertungen der Nutzer
                </h6>
            </section>
            <div class="d-flex justify-content-center gap-5">
                <div class="d-flex flex-column">
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">4,1</h6>
                        <h6 style="width: 12rem;" class="alert alert-primary border-start-0 rounded-0">WLAN</h6>
                    </div>
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">5,4</h6>
                        <h6 style="width: 12rem;" class="alert alert-primary border-start-0 rounded-0">
                            Kundenservice</h6>
                    </div>
                </div>
                <div style="width: 14rem" class="d-flex flex-column">
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">9,3</h6>
                        <h6 style="width: 12rem;" class="alert alert-primary border-start-0 rounded-0">Raumausstattung</h6>
                    </div>
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">7,8</h6>
                        <h6 style="width: 12rem;" class="alert alert-primary border-start-0 rounded-0">Sauberkeit</h6>
                    </div>
                </div>
                <div style="width: 18rem" class="d-flex flex-column">
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">6,1</h6>
                        <h6 style="width: 15rem;" class="alert alert-primary border-start-0 rounded-0">
                            Preis-Leistungsverhältnis</h6>
                    </div>
                    <div class="d-flex w-100">
                        <h6 style="width: 3.5rem;" class="alert alert-secondary border-end-0 rounded-0 fw-bold">9,4</h6>
                        <h6 style="width: 15rem;" class="alert alert-primary border-start-0 rounded-0">Lage</h6>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="py-5">
                <h2 class="h2">Bestellung abschließen</h2>
                <h6 class="h6 text-muted">Im Folgenden hast du die Möglichkeit, diese Unterkunft in Anspruch zu
                    nehmen.</h6>
            </div>
            <div class="d-flex justify-content-end mb-5">
                <button class="btn btn-dark d-flex" data-bs-toggle="modal" data-bs-target="#payment">
                    Buchen
                </button>
            </div>
        </section>

        <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="paymentLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="paymentLabel">Buchung abschließen</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 pt-4">
                        <div class="d-flex justify-content-between">
                            <h5>Kosten</h5>
                            <h5 style="font-size:1.3rem; background-color: rgb(145, 237, 191)"
                                class="badge text-dark p-2 px-3">300 €</h5>
                        </div>

                        <div class="py-5">
                            <div class="d-flex justify-content-between">
                                <label>Beginn der Reise</label>
                                <input type="date">
                            </div>
                            <div class="d-flex justify-content-between">
                                <label>Ende der Reise</label>
                                <input type="date">
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-column">
                            <h6 style="font-weight: 300">
                                Zahlungsmöglichkeit wählen
                            </h6>
                            <div class="d-flex gap-4">
                                <h1 class="bi h1 bi-paypal"></h1>
                                <h1 class="bi h1 bi-credit-card-fill"></h1>
                                <h1 class="bi h1 bi-apple"></h1>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Schließen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>