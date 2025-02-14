<?php
require_once 'controllers/PageController.php';

$pageController = new PageController();
$pageController->handleRequest();
include 'views/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'views/navbar.php'; ?>
        
        <!-- Contenido Principal -->
        <main class="col-md-10">
            <?php include 'views/carousel.php'; ?>
        </main>
    </div>
</div>

<?php
include 'views/footer.php';
?>
