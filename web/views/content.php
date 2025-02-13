<?php
require_once 'models/ComputerModel.php';
$model = new ComputerModel();
$type = isset($_GET['page']) ? $_GET['page'] : 'home';
$description = $model->getComputers($type);
?>

<main class="content">
    <h2><?php echo ucfirst($type); ?></h2>
    <p><?php echo $description; ?></p>

    <div class="product-grid">
        <div class="product-card">
            <img src="assets/images/laptop.jpg" alt="Laptops">
            <h3>Laptops</h3>
            <p>Encuentra una gran variedad de laptops para trabajo, estudio y gaming.</p>
            <a href="index.php?page=laptops" class="btn">Ver más</a>
        </div>

        <div class="product-card">
            <img src="assets/images/desktop.jpg" alt="Escritorio">
            <h3>Computadoras de Escritorio</h3>
            <p>Las mejores computadoras de escritorio para tu hogar u oficina.</p>
            <a href="index.php?page=escritorio" class="btn">Ver más</a>
        </div>

        <div class="product-card">
            <img src="assets/images/mac.jpg" alt="Mac">
            <h3>Mac</h3>
            <p>Descubre nuestra selección de computadoras Apple MAC.</p>
            <a href="index.php?page=mac" class="btn">Ver más</a>
        </div>

        <div class="product-card">
            <img src="assets/images/windows.jpg" alt="Windows">
            <h3>Windows</h3>
            <p>Compra computadoras con sistema operativo Windows al mejor precio.</p>
            <a href="index.php?page=windows" class="btn">Ver más</a>
        </div>
    </div>
</main>
