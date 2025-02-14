<?php
require_once 'models/ComputerModel.php';
$model = new ComputerModel();
$type = isset($_GET['page']) ? $_GET['page'] : 'home';
$description = $model->getComputers($type);
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Catálogo de Laptops</h2>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/laptop1.jpg" class="card-img-top fixed-image" alt="Laptop 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Dell Inspiron 15-7579</h5>
                    <p class="card-text">Core i5, 7ma Gen, 12GB RAM, 256GB SSD, Pantalla 15.6" Táctil</p>
                    <p class="price text-danger">Q3,495.00</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/laptop2.jpg" class="card-img-top fixed-image" alt="Laptop 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Dell Latitude 5400</h5>
                    <p class="card-text">Core i5, 8va Gen, 16GB RAM, 256GB SSD, Pantalla 14" FHD</p>
                    <p class="price text-danger">Q2,995.00</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/images/laptop3.jpg" class="card-img-top fixed-image" alt="Laptop 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Dell Latitude 5400 (Touch)</h5>
                    <p class="card-text">Core i5, 8va Gen, 16GB RAM, 256GB SSD, Pantalla 14" Touch</p>
                    <p class="price text-danger">Q3,178.00</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fixed-image {
        height: 300px;
        object-fit: cover;
    }
</style>
