<!-- Carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner text-center">
        <div class="carousel-item active">
            <img src="../assets/images/carousel1.jpg" class="d-block mx-auto img-fluid carousel-img" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="../assets/images/carousel2.jpg" class="d-block mx-auto img-fluid carousel-img" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="../assets/images/carousel1.jpg" class="d-block mx-auto img-fluid carousel-img" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Estilos personalizados -->
<style>
    .carousel-img {
        max-width: 800px; 
        max-height: 200px; 
        object-fit: cover;
    }
</style>

