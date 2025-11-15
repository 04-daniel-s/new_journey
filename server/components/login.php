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
        <h3 class="card-text">Einloggen</h3>
        <h5 class="text-muted fs-6 mb-5">Gib dein Passwort und deine E-Mail Adresse an und erhalte Zugriff auf alle Unterkünfte, die für deine Reise infrage kommen.</h5>
        <form action="" method="POST" style="height: 5rem">
            <div class="search-bar-sub-container">
                <label for="login-email" class="search-bar-label">E-Mail</label>
                <input required disabled aria-label="Suchleiste" id="login-email" class="h-100 position-absolute form-control rounded-0"
                       type="email" name="login-email"
                       placeholder=<?php echo "$email" ?>>
            </div>

            <div class="search-bar-sub-container mt-3">
                <label for="login-password" class="search-bar-label">Passwort</label>
                <input required aria-label="Suchleiste" id="login-password" class="h-100 position-absolute form-control rounded-0"
                       type="password" name="login-password"
                       placeholder="Passwort angeben">
            </div>
            <button aria-label="Anmeldedaten absenden" type="submit" class="btn btn-dark w-100 display-3 mt-4">
                Weiter
            </button>
        </form>
    </card>
</div>