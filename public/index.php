<?php
$pageTitle = 'New Journey';
require __DIR__ . '/../server/header.php';
?>

    <main class="container-fluid px-0 pt-5 m-0 flex-grow-1">
        <?php
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "/";
        $path = trim(parse_url($url, PHP_URL_PATH), '/');
        $file = $path . ".php";

        if ($path === '') {
            require __DIR__ . '/../server/homepage.php';
        } elseif (file_exists($file)) {
            include $file;
        } else {
            require __DIR__ . '/../server/homepage.php';
        }
        ?>
    </main>

<?php
require __DIR__ . '/../server/footer.php';
