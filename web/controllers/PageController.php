<?php

class PageController {
    public function handleRequest() {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/navbar.php';

        switch ($page) {
            case 'laptops':
            case 'escritorio':
            case 'mac':
            case 'windows':
                include __DIR__ . '/../views/content.php';
                break;
            default:
                include __DIR__ . '/../views/home.php';
                break;
        }

        include __DIR__ . '/../views/footer.php';
    }
}
?>
