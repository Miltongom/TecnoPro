<?php

require_once 'models/ComputerModel.php';
$model = new ComputerModel();
$type = isset($_GET['page']) ? $_GET['page'] : 'laptops';
$description = $model->getComputers($type);

?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Catálogo de Laptops</h2>
    <div class="row">
        <?php
        // Array de productos para hacerlo dinámico
        $laptops = [
            ["Dell Inspiron 15-7579", "Core i5, 7ma Gen, 12GB RAM, 256GB SSD, 15.6\" Táctil", "Q3,495.00", "laptop1.jpg"],
            ["Dell Latitude 5400", "Core i5, 8va Gen, 16GB RAM, 256GB SSD, 14\" FHD", "Q2,995.00", "laptop2.jpg"],
            ["Dell Latitude 5400 (Touch)", "Core i5, 8va Gen, 16GB RAM, 256GB SSD, 14\" Touch", "Q3,178.00", "laptop3.jpg"],
            ["HP EliteBook 840 G5", "Core i7, 8va Gen, 16GB RAM, 512GB SSD, 14\" FHD", "Q4,500.00", "laptop4.jpg"],
            ["Lenovo ThinkPad T490", "Core i7, 8va Gen, 16GB RAM, 512GB SSD, 14\" FHD", "Q4,250.00", "laptop5.jpg"],
            ["MacBook Air M1", "Chip M1, 8GB RAM, 256GB SSD, 13.3\" Retina", "Q7,500.00", "laptop6.jpg"]
        ];

        foreach ($laptops as $laptop) {
            echo "
                <div class='col-md-4 mb-4'>
                    <div class='card shadow-lg h-100'>
                        <img src='../assets/images/{$laptop[3]}' class='card-img-top fixed-image' alt='{$laptop[0]}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$laptop[0]}</h5>
                            <p class='card-text'>{$laptop[1]}</p>
                            <p class='price text-danger fw-bold'>{$laptop[2]}</p>
                            <a href='#' class='btn btn-primary'>Ver más</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</div>

<!-- Estilos personalizados -->
<style>
    .fixed-image {
        height: 250px;
        object-fit: cover;
    }

    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>
