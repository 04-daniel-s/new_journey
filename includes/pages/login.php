<?php
require_once __DIR__ . "/../config_session.php";
require_once __DIR__ . "/../signin/auth_contr.php";

if (isset($_SESSION["user_id"])) {
    header("location: homepage.php");
    die();
}

if (isset($_SESSION["signup"]["email"])) {
    $email = $_SESSION["signup"]["email"];

    if (isset($_POST["password"])) {
        $password = trim($_POST['password'], PASSWORD_BCRYPT);

        if (isCorrectPassword($password)) {
            regenerateSession();
            $_SESSION["user_id"] = 1; //TODO: fetch from database
            header("location: /homepage");
        }
    }
} else {
    header("location: signin");
    die();
}
?>

<div class="w-100 d-flex justify-content-center align-items-end pt-5">
    <card style="width: 30rem" class="pt-5 px-4">
        <h3 class="card-text">Einloggen</h3>
        <h5 class="text-muted fs-6 mb-5">Gib dein Passwort und deine E-Mail Adresse an und erhalte Zugriff auf alle
            Unterkünfte, die für deine Reise infrage kommen.</h5>
        <form novalidate action="" method="POST" style="height: 5rem">
            <div class="search-bar-sub-container">
                <label for="login-email" class="search-bar-label">E-Mail</label>
                <input required disabled aria-label="Suchleiste" id="login-email"
                       class="h-100 position-absolute form-control rounded-0"
                       type="email" name="email"
                       placeholder=<?php echo "$email" ?>>
            </div>

            <div class="search-bar-sub-container mt-3">
                <label for="login-password" class="search-bar-label">Passwort</label>
                <input required aria-label="Suchleiste" id="login-password"
                       class="h-100 position-absolute form-control rounded-0 <?php if(isset($password) && !isCorrectPassword($password)) echo "is-invalid"?>"
                       type="password" name="password"
                       placeholder="Passwort angeben">
            </div>
            <button aria-label="Anmeldedaten absenden" type="submit" class="btn btn-dark w-100 display-3 mt-4">
                Weiter
            </button>
        </form>
    </card>
</div>