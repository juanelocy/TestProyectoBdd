<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portada con Carrusel y Submenú</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a tu archivo CSS personalizado -->
    <style>
        /* Estilos personalizados */
        body {
            padding-top: 56px;
            /* Espacio para la barra de navegación fija */
            background-color: #d9c2ab;
            /* Color de fondo */
        }

        .navbar {
            background-color: #ccb693;
            /* Color de la barra de navegación */
        }

        .navbar-brand,
        .nav-link,
        .dropdown-item {
            color: #6f4e37 !important;
            /* Color de los textos */
        }

        .navbar-toggler-icon {
            color: #6f4e37;
            /* Color del ícono del toggler */
        }

        .carousel-item img {
            object-fit: cover;
            height: 600px;
            /* Ajusta la altura del carrusel */
            width: 100%;
            /* Asegura que las imágenes ocupen todo el ancho del contenedor */
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-link {
            font-size: 1.1rem;
        }

        .dropdown-menu a {
            font-size: 1rem;
        }

        .carousel-indicators li {
            background-color: #6f4e37;
            /* Color de los indicadores del carrusel */
        }
    </style>

</head>

<body>
    <!-- Navegación -->
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.html">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/merc1.png" alt="Primera imagen">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/merc2.png" alt="Segunda imagen">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/merc3.png" alt="Tercera imagen">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>