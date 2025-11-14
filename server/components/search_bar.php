<div class="d-flex justify-content-center px-5 w-100">
    <form action="/search" method="GET" style="width: 55rem; min-height: 6rem"
          class="p-0 rounded-pill">
        <card class="card overflow-hidden rounded-pill d-flex flex-row justify-content-center align-items-center h-100">
            <div class="bi-caret-right-fill search-bar-icon"></div>
            <div class="col-6 search-bar-sub-container">
                <label for="location" class="search-bar-label">Ort</label>
                <input required aria-label="Suchleiste" id="location"
                       class="h-100 position-absolute form-control rounded-0" type="text" name="location"
                       placeholder="Ort der Reise...">
            </div>
            <div class="col-2 search-bar-sub-container">
                <label for="min" class="search-bar-label">Minimum Preis</label>
                <input aria-label="Mindest Preis" id="min" class="h-100 form-control position-absolute rounded-0"
                       type="number" name="min"
                       placeholder="0">
            </div>
            <div class="col-2 search-bar-sub-container">
                <label for="max" class="search-bar-label">Maximum Preis</label>
                <input aria-label="Maximal Preis" id="max" class="h-100 form-control position-absolute rounded-0"
                       type="number" name="max"
                       placeholder="100">
            </div>
            <div class="col-1 search-bar-sub-container">
                <button aria-label="Suchanfrage senden" type="submit"
                        class="btn btn-light btn-outline-secondary search-bar-icon form-control rounded-0 border-0">
                    <span aria-label="Icon Lupe" class="bi-search"></span>
                </button>
            </div>
        </card>
    </form>
</div>