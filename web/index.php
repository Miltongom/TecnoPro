<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hot Computer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* General adjustments */
        body {
            font-family: Arial, sans-serif;
        }

        /* Sidebar navigation */
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

        /* Main content */
        .content {
            margin-left: 250px; /* Adjust for sidebar */
            padding: 20px;
        }

        /* Carousel */
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

    <!-- Sidebar navigation -->
    <nav class="sidebar">
        <div class="text-center">
            <img src="../assets/images/logotipo.jpeg" alt="Hot Computer" width="100">
            <h4>Hot Computer</h4>
        </div>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=laptops">Laptops</a>
        <a href="index.php?page=desktop">Desktop</a>
    </nav>

    <!-- Main content -->
    <div class="content">
        <!-- Header with Carousel -->
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                </div>
                <div class="col-12">
                    <!-- Carousel -->
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

        <!-- Main (dynamic content) -->
        <main class="container mt-4">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $pageFile = "views/$page.php";

            if (file_exists($pageFile)) {
                include $pageFile;
            } else {
                echo "<div class='container mt-5 text-center'>
                        <h2 class='text-danger'>Page not found</h2>
                        <p>Sorry, the page you are looking for does not exist.</p>
                        <a href='index.php?page=home' class='btn btn-primary'>Return to Home</a>
                      </div>";
            }
            ?>
        </main>

        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Asegurar que el cuerpo ocupe toda la pantalla */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Permitir que el contenido crezca y empuje el footer hacia abajo */
        .content {
            flex: 1;
        }

        /* Mantener el footer al final sin que se superponga al contenido */
        footer {
            width: 100%;
            position: relative;
        }

        /* Estilo para los íconos de redes sociales */
        .social-icons a {
            font-size: 24px;
            margin: 0 10px;
            color: white;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #f8b400; /* Cambia de color al pasar el mouse */
        }
    </style>
</head>
<body>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p>&copy; 2025 Hot Computer. All rights reserved.</p>
    
    <div>
        <a href="#" class="text-white me-3">Privacy Policy</a>
        <a href="#" class="text-white">Terms and Conditions</a>
    </div>

    <!-- Social Media Icons -->
    <div class="social-icons mt-3">
        <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .fixed-image {
        height: 200px;
        object-fit: cover;
    }

    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>