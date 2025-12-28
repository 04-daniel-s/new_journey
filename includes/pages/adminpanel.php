<?php
require_once __DIR__ . "/../config_session.php";
require_once __DIR__ . "/../database.php";

$currentUser = $_SESSION["user"] ?? null;
$currentRole = is_array($currentUser) && isset($currentUser["role"]) ? $currentUser["role"] : null;

if ($currentUser === null || $currentRole !== "admin") {
    http_response_code(403);
    ?>
    <div class="container py-5">
        <h3>Verboten</h3>
        <p>Diese Seite ist nicht erreichbar!</p>
    </div>
    <?php
    return;
}

$error = null;
$success = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $userId = isset($_POST["user_id"]) ? (int)$_POST["user_id"] : -1;
    $newRole = isset($_POST["role"]) ? trim((string)$_POST["role"]) : "";

    $allowedRoles = ["user", "provider", "admin"];

    if ($userId <= 0 || $newRole === "" || !in_array($newRole, $allowedRoles, true)) {
        $error = "Eingaben sind ungültig.";
    } else {
        try {
            if ($userId === (int)$currentUser["id"] && $newRole != "admin") {
                $statementCount = getConnection()->query("SELECT COUNT(*) AS c FROM users WHERE role = \"admin\"");
                $row = $statementCount->fetch_assoc();
                $adminCount = (int)($row["c"] ?? 0);

                if ($adminCount <= 1) {
                    $error = "Du kannst dir als letzter Admin deine Admin-Rolle nicht selbst entziehen.";
                }
            }

            if ($error === null) {
                $statement = getConnection()->prepare("UPDATE users SET role = ? WHERE id = ?");
                $statement->bind_param("si", $newRole, $userId);
                $statement->execute();
                $statement->close();

                $success = "Rolle wurde aktualisiert.";

                if ($userId === (int)$currentUser["id"]) {
                    $_SESSION["user"]["role"] = $newRole;
                }
            }
        } catch (Throwable $e) {
            $error = "Aktualisieren der Rolle fehlgeschlagen.";
        }
    }
}

$users = [];
try {
    $statement = getConnection()->query("SELECT id, username, email, role FROM users ORDER BY id ASC");
    if ($statement) {
        while ($row = $statement->fetch_assoc()) {
            $users[] = $row;
        }
        $statement->free();
    }
} catch (Throwable $e) {
    $error = $error ?? "Benutzer konnten nicht geladen werden.";
}
?>
<div class="container py-4">
    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between mb-3">
        <h2 class="mb-2 mb-sm-0">Adminbereich</h2>
        <a class="btn btn-outline-secondary btn-sm w-auto"
           href="/"
           aria-label="Zur Startseite wechseln">
            Zur Startseite
        </a>
    </div>

    <?php if ($success): ?>
        <div class="alert alert-success" role="status">
            <?= htmlspecialchars($success) ?>
        </div>
    <?php endif; ?>

    <?php if ($error !== null): ?>
        <div class="alert alert-danger" role="alert">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0"
                       aria-describedby="Übersicht aller Benutzer und ihrer Rollen im Adminbereich">
                    <thead class="table-head-sm-disable d-table-header-group">
                    <tr>
                        <th>ID</th>
                        <th>Benutzername</th>
                        <th>E‑Mail</th>
                        <th>Aktuelle Rolle</th>
                        <th>Rolle ändern</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!$users): ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Keine Benutzer gefunden.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($users as $u): ?>
                            <tr class="d-block d-sm-table-row mb-3 mb-sm-0">
                                <td class="d-flex d-sm-table-cell justify-content-between">
                                    <span class="fw-semibold d-sm-none">ID:</span>
                                    <span><?= (int)$u["id"] ?></span>
                                </td>
                                <td class="d-flex d-sm-table-cell justify-content-between">
                                    <span class="fw-semibold d-sm-none">Benutzername:</span>
                                    <span><?= htmlspecialchars($u["username"]) ?></span>
                                </td>
                                <td class="d-flex d-sm-table-cell justify-content-between">
                                    <span class="fw-semibold d-sm-none">E‑Mail:</span>
                                    <span><?= htmlspecialchars($u["email"]) ?></span>
                                </td>
                                <td class="d-flex d-sm-table-cell justify-content-between align-items-center">
                                    <span class="fw-semibold d-sm-none me-2">Aktuelle Rolle:</span>
                                    <span class="badge bg-secondary">
                                        <?= htmlspecialchars($u["role"]) ?>
                                    </span>
                                </td>
                                <td class="d-block d-sm-table-cell">
                                    <form method="post"
                                          class="d-flex flex-column flex-sm-row flex-sm-row gap-2 align-items-stretch align-items-sm-center mt-2 mt-sm-0"
                                          aria-label="Rolle für Benutzer <?= htmlspecialchars($u['username']) ?> ändern">
                                        <input type="hidden" name="user_id" value="<?= (int)$u["id"] ?>">
                                        <div class="flex-grow-1">
                                            <label for="role-<?= (int)$u["id"] ?>"
                                                   class="form-label d-block d-sm-none mb-1">
                                                Rolle ändern
                                            </label>
                                            <select id="role-<?= (int)$u["id"] ?>"
                                                    name="role"
                                                    class="form-select form-select-sm w-50">
                                                <?php foreach (["user", "provider", "admin"] as $role): ?>
                                                    <option value="<?= $role ?>" <?= $role === $u["role"] ? "selected" : "" ?>>
                                                        <?= ucfirst($role) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <button
                                                type="submit"
                                                class="btn btn-sm 100 w-sm-auto"
                                                style="background-color: #27df82; border-color: #27df82; color: #ffffff;"
                                                aria-label="Rolle von <?= htmlspecialchars($u['username']) ?> aktualisieren">
                                            Aktualisieren
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>