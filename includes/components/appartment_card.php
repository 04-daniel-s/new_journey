<card style="width: 20rem;" class="shadow card p-0">
    <img alt="Vorschaubild der Unterkunft" class="card-img-top w-100" src="./img/room.webp"/>
    <div class="card-body w-100">
        <div class="d-flex flex-row justify-content-between">
            <h5 style="font-size: 1.3rem">Hotel Zimmer XL</h5>
            <h5 style="background-color: rgb(145, 237, 191)"
                class="badge text-black d-flex justify-content-center align-items-center">300 €</h5>
        </div>
        <h6 style="font-size: 0.9rem; font-weight: 300;" class="text-muted mb-5">
            Musterstraße 3, Wien 1190
        </h6>
        <div class="d-flex row justify-content-between align-items-end">
            <h6 style="font-size: 0.8rem" class="text-wrap col-4 text-muted">Geeignet für 2 Personen</h6>
            <div class="row col-8">
                <h6 style="font-size: 0.8rem" class="text-end">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<span class='bi-star-fill ps-1'/>";
                    }
                    ?>
                </h6>
                <h6 style="font-size: 0.8rem" class="text-end fw-bold">5912 Bewertungen</h6>
            </div>
        </div>
        <a style="text-decoration: none;" href="/hotel" class="d-flex justify-content-center p-3">
            <button aria-label="Unterkunft aussuchen" class="btn bg-dark btn-outline-dark text-white">
                Auswählen
            </button>
        </a>
    </div>
</card>