<?php
include "db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/navegador.css">
    <link rel="shortcut icon" href="../public/img/R.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>TEC</title>
</head>
<body>

<?php include 'navegacion.php'; ?>

<!--Seccion de carrusel-->
<br><br><br><!---->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../public/img/car1.jpg" alt="First slide">
            <h2 class="heading1">Bienvenido a Pencil</h2>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/img/car2.jpeg" alt="Second slide">
            <h2 class="heading2">La red social para estudiantes<h2>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/img/car3.jpg" alt="Third slide">
            <h2 class="heading3">Unete y conoce los beneficios para ti<h2>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>
</html>

