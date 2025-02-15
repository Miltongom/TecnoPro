<div class="container mt-5">
    <h2 class="mb-4 text-center">Catálogo de Computadoras de Escritorio</h2>
    <div class="row">
        <?php
        $desktops = [
            ["HP EliteDesk 800 G3", "Core i5, 7ma Gen, 8GB RAM, 500GB HDD", "Q2,299.00", "desktop1.jpg"],
            ["Dell OptiPlex 7060", "Core i7, 8va Gen, 16GB RAM, 512GB SSD", "Q3,800.00", "desktop2.jpg"],
            ["Lenovo ThinkCentre M920", "Core i5, 9na Gen, 8GB RAM, 1TB HDD", "Q2,999.00", "desktop3.jpg"],
            ["Asus ROG Strix G35", "Core i9, 10ma Gen, 32GB RAM, 1TB SSD, RTX 3080", "Q15,500.00", "desktop4.jpg"],
            ["Mac Mini M1", "Chip M1, 8GB RAM, 256GB SSD", "Q6,200.00", "desktop5.jpg"],
            ["Acer Aspire TC-895", "Core i5, 10ma Gen, 12GB RAM, 512GB SSD", "Q3,250.00", "desktop6.jpg"],
        ];

        foreach ($desktops as $desktop) {
            echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='../assets/images/{$desktop[3]}' class='card-img-top fixed-image' alt='{$desktop[0]}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$desktop[0]}</h5>
                            <p class='card-text'>{$desktop[1]}</p>
                            <p class='price text-danger'>{$desktop[2]}</p>
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
