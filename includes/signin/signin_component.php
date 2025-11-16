<?php
require_once __DIR__ . "/../config_session.php";
require_once __DIR__ . "/../signin/auth_contr.php";

$valid = true;
$email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
    $valid = isValidEmail($_POST["email"]);
}
?>

<main class="d-flex justify-content-center align-items-end pt-5">
    <card style="width: 30rem" class="pt-5 px-4">
        <h3 class="card-text">Einloggen oder Registrieren</h3>
        <h6 class="text-muted mb-5">Gib deine E-Mail Adresse an und erhalte Zugriff auf alle Unterkünfte,
            die für
            deine Reise infrage kommen.</h6>
        <form novalidate class="has-validation" method="POST" action=""" style="height: 5rem">
            <div class="search-bar-sub-container">
                <label for="signin-email" class="search-bar-label">E-Mail</label>
                <input required aria-label="Suchleiste" id="signin-email"
                       class="h-100 position-absolute form-control rounded-0 <?php if (!$valid) echo "is-invalid" ?>"
                       type="email" name="email"
                       value="<?php echo $email?>"
                       placeholder="mustermann@example.com">
            </div>

            <button aria-label="E-Mail angeben" type="submit" class="btn btn-dark w-100 display-3 mt-4">
                Weiter
            </button>
        </form>
    </card>
</main>
