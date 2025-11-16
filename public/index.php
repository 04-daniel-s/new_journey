<?php
$pageTitle = 'New Journey';
require __DIR__ . '/../includes/header.php';
?>
    <main style="padding-top: 10vh" class="container-fluid px-0 m-0 flex-grow-1">
        <?php
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
        $path = trim(parse_url($url, PHP_URL_PATH), '/');

        if ($path === '') {
            require __DIR__ . '/../includes/pages/homepage.php';
        } elseif ($path === 'signin') {
            require __DIR__ . '/../includes/pages/signin.php';
        } elseif ($path === 'register') {
            require __DIR__ . '/../includes/pages/register.php';
        } elseif ($path === 'login') {
            require __DIR__ . '/../includes/pages/login.php';
        } elseif ($path === 'search') {
            require __DIR__ . '/../includes/pages/search.php';
        } elseif ($path === 'hotel') {
            require __DIR__ . '/../includes/pages/hotel.php';
        } else {
            require __DIR__ . '/../includes/pages/homepage.php';
        }
        ?>
    </main>

<?php
require __DIR__ . '/../includes/footer.php';
