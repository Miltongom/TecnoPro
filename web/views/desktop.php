<div class="container mt-5">
    <h2 class="mb-4 text-center">Desktop Computer Catalog</h2>
    <div class="row">
        <?php
        $desktops = [
            ["HP EliteDesk 800 G3", "Core i5, 7th Gen, 8GB RAM, 500GB HDD", "$299.00", "desktop1.jpg"],
            ["Dell OptiPlex 7060", "Core i7, 8th Gen, 16GB RAM, 512GB SSD", "$495.00", "desktop2.jpg"],
            ["Lenovo ThinkCentre M920", "Core i5, 9th Gen, 8GB RAM, 1TB HDD", "$389.00", "desktop3.jpg"],
            ["Asus ROG Strix G35", "Core i9, 10th Gen, 32GB RAM, 1TB SSD, RTX 3080", "$1,995.00", "desktop4.jpg"],
            ["Mac Mini M1", "M1 Chip, 8GB RAM, 256GB SSD", "$799.00", "desktop5.jpg"],
            ["Acer Aspire TC-895", "Core i5, 10th Gen, 12GB RAM, 512GB SSD", "$425.00", "desktop6.jpg"],
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
                            <a href='#' class='btn btn-primary'>View More</a>
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
