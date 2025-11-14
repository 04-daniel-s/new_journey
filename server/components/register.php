<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin-email"])) {
    $email = $_POST["signin-email"];
} else {
    header("location: signin.php");
    exit();
}
?>

<div class="w-100 d-flex justify-content-center align-items-end pt-5">
    <card style="width: 30rem" class="pt-5 px-4">
        <h3 class="card-text">Registrieren</h3>
        <h5 class="text-muted fs-6 mb-5">Registriere dich mit deinen Daten und erhalte Zugriff auf alle Unterkünfte, die
            für deine Reise infrage kommen.</h5>
        <form action="" method="POST" style="height: 5rem">
            <div class="search-bar-sub-container">
                <label for="register-email" class="search-bar-label">E-Mail</label>
                <input disabled aria-label="Suchleiste" id="register-email"
                       class="h-100 position-absolute form-control rounded-0"
                       type="email" name="register-email"
                       placeholder=<?php echo "$email" ?>>
            </div>

            <div class="search-bar-sub-container mt-3">
                <label for="register-name" class="search-bar-label">Name</label>
                <input required aria-label="Suchleiste" id="register-name"
                       class="h-100 position-absolute form-control rounded-0"
                       type="email" name="register-name"
                       placeholder="Max Mustermann">
            </div>

            <div class="search-bar-sub-container mt-3">
                <label for="register-password" class="search-bar-label">Passwort</label>
                <input required aria-label="Suchleiste" id="register-password"
                       class="h-100 position-absolute form-control rounded-0"
                       type="password" name="register-password"
                       placeholder="Passwort angeben">
            </div>
            <button aria-label="Registrierung absenden" type="submit" class="btn btn-dark w-100 display-3 mt-4">
                Weiter
            </button>
        </form>
    </card>
</div>