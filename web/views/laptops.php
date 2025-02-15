<div class="container mt-5">
    <h2 class="mb-4 text-center">Catálogo de Laptops</h2>
    <div class="row">
        <?php
        $laptops = [
            ["Dell Inspiron 15-7579", "Core i5, 7ma Gen, 12GB RAM, 256GB SSD, 15.6\" Táctil", "Q3,495.00", "laptop1.jpg"],
            ["Dell Latitude 5400", "Core i5, 8va Gen, 16GB RAM, 256GB SSD, 14\" FHD", "Q2,995.00", "laptop2.jpg"],
            ["HP EliteBook 840 G5", "Core i7, 8va Gen, 16GB RAM, 512GB SSD, 14\" FHD", "Q4,500.00", "laptop3.jpg"],
            ["Lenovo ThinkPad T490", "Core i7, 8va Gen, 16GB RAM, 512GB SSD, 14\" FHD", "Q4,250.00", "laptop4.jpg"],
            ["Asus ZenBook 14", "Core i5, 10ma Gen, 8GB RAM, 512GB SSD, 14\" FHD", "Q3,799.00", "laptop5.jpg"],
            ["MacBook Air M1", "Chip M1, 8GB RAM, 256GB SSD, 13.3\" Retina", "Q7,500.00", "laptop6.jpg"],
        ];

        foreach ($laptops as $laptop) {
            echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='../assets/images/{$laptop[3]}' class='card-img-top fixed-image' alt='{$laptop[0]}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$laptop[0]}</h5>
                            <p class='card-text'>{$laptop[1]}</p>
                            <p class='price text-danger'>{$laptop[2]}</p>
                            <a href='#' class='btn btn-primary'>Ver más</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</div>

<style>
    .fixed-image {
        height: 200px;
        object-fit: cover;
    }
</style>
