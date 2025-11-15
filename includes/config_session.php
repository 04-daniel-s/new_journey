<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    //NUR BEI HTTPS 'secure' => true,
    'httponly' => true,
]);

session_start();

function regenerateSession() {
    session_regenerate_id(true); //LV 8
    $_SESSION["last_regeneration"] = time();
}

if (!isset($_SESSION['last_regeneration'])) {
    regenerateSession();
} else {
    $regeneration_time = 15 * 60;
    if(time() - $_SESSION['last_regeneration'] >= $regeneration_time) {
        regenerateSession();
    }
}
?>
