<?php
$pageTitle = 'New Journey';
require __DIR__ . '/../server/header.php';
?>
    <main style="padding-top: 10vh" class="container-fluid px-0 m-0 flex-grow-1">
        <?php
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
        $path = trim(parse_url($url, PHP_URL_PATH), '/');

        if ($path === '') {
            require __DIR__ . '/../server/homepage.php';
        } elseif ($path === 'signin') {
            require __DIR__ . '/../server/signin.php';
        } elseif ($path === 'search') {
            require __DIR__ . '/../server/search.php';
        } else {
            require __DIR__ . '/../server/homepage.php';
        }
        ?>
    </main>

<?php
require __DIR__ . '/../server/footer.php';
