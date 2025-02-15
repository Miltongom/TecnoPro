<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Computer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Ajustes generales */
        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar lateral */
        .sidebar {
            height: 100vh;
            background-color: #212529;
            color: white;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
        }

        .sidebar img {
            display: block;
            margin: 0 auto 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #343a40;
        }

        /* Contenido principal */
        .content {
            margin-left: 250px; /* Ajuste para el navbar */
            padding: 20px;
        }

        /* Carrusel */
        .carousel-container {
            max-width: 100%;
            margin: auto;
        }

        .carousel-inner img {
            height: 400px;
            object-fit: cover;
        }

        /* Footer */
        footer {
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar lateral -->
    <nav class="sidebar">
        <div class="text-center">
            <img src="../assets/images/logotipo.jpeg" alt="Hot Computer" width="100">
            <h4>Hot Computer</h4>
        </div>
        <a href="index.php?page=home">Inicio</a>
        <a href="index.php?page=laptops">Laptops</a>
        <a href="index.php?page=desktop">Escritorio</a>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <!-- Header con Carrusel -->
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                </div>
                <div class="col-12">
                    <!-- Carrusel -->
                    <div id="carouselExampleIndicators" class="carousel slide carousel-container" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/images/carousel1.png" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/carousel2.png" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/carousel3.png" class="d-block w-100" alt="Slide 3">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/carousel4.png" class="d-block w-100" alt="Slide 4">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/carousel5.png" class="d-block w-100" alt="Slide 5">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/carousel6.png" class="d-block w-100" alt="Slide 6">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main (contenido dinámico) -->
        <main class="container mt-4">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $pageFile = "views/$page.php";

            if (file_exists($pageFile)) {
                include $pageFile;
            } else {
                echo "<div class='container mt-5 text-center'>
                        <h2 class='text-danger'>Página no encontrada</h2>
                        <p>Lo sentimos, la página que buscas no existe.</p>
                        <a href='index.php?page=home' class='btn btn-primary'>Volver al Inicio</a>
                      </div>";
            }
            ?>
        </main>

        <!-- Footer -->
        <footer class="mt-5">
            <p>&copy; 2024 Hot Computer - Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
