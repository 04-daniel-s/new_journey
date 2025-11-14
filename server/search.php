<main class="w-100 h-100 row m-0 justify-content-center pt-3">

    <div class="col-12">
        <?php
        require __DIR__ . '/components/search_bar.php'
        ?>
    </div>

    <div class="d-flex justify-content-center w-75">
        <div class="d-flex flex-column flex-md-row mt-4 align-items-center align-items-md-start justify-content-center">
            <form style="height:30rem; width: 20rem" class="col-3 px-3 py-2 border border-light">
                <section class="mb-5 border border-light border-bottom">
                    <h5 class="text-white text-muted">Budget</h5>
                    <div class="input-group input-group-sm mb-1">
                        <label class="col-4 input-group-text" for="filter-min">Minimum</label>
                        <input type="number" class="col-4 form-control" id="filter-min">
                        <span class="col-2 input-group-text">€</span>
                    </div>

                    <div class="input-group input-group-sm mb-1">
                        <label class="col-4 input-group-text" for="filter-max">Maximum</label>
                        <input type="number" class="col-4 form-control" id="filter-max">
                        <span class="col-2 input-group-text">€</span>
                    </div>
                </section>

                <section class="mb-5 w-100">
                    <h5 class="text-white text-muted">Bewertungen</h5>
                    <?php
                    for ($k = 1; $k <= 5; $k++) {
                        ?>
                        <div class="input-group input-group-sm mb-1 d-flex flex-row justify-content-between">
                            <input style="width: 15%;" type="checkbox" id="filter-min">
                            <label style="width: 80%;" class="input-group-text"
                                   for="filter-min"><?php echo "$k Sterne" ?></label>
                        </div>
                        <?php
                    }
                    ?>
                </section>
                <div class="w-100 d-flex flex-row-reverse">
                    <button aria-label="Filter setzen" type="submit" class="btn btn-dark">Filter setzen</button>
                </div>
            </form>

            <section style="background-color: #f8fafc;"
                     class="d-flex w-100 gap-3 flex-wrap border border-light justify-content-center py-3">
                <?php for ($l = 0; $l < 10; $l++) {
                    require __DIR__ . '/components/appartment_card.php';
                } ?>

            </section>
        </div>
    </div>
</main>