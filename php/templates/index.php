<?php
include "db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/navegador.css">
    <link rel="stylesheet" href="../public/css/servicios.css">
    <link rel="shortcut icon" href="../public/img/R.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Index</title>
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


<!--Seccion de Conocenos-->
<div class="servicios-contenedor" id="servicios">
    <h1>Conocenos</h1>
    <div class="contenedor">
        <div class="servicio" data-aos="fade-right">
                <figure>
                        <img src="../public/img/conocenos1.jpeg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Conoce a nuevas personas</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, eius minus. Aut voluptates voluptatum aperiam aspernatur amet nobis, ex animi.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="../public/img/conocenos2.jpg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Mantente conectado</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos rerum blanditiis cumque accusamus tenetur? Sit eveniet laborum obcaecati? Expedita, explicabo.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="../public/img/conocenos3.jpg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Mantente informado</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos rerum blanditiis cumque accusamus tenetur? Sit eveniet laborum obcaecati? Expedita, explicabo.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="../public/img/conocenos4.jpeg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Aprende y ayuda a los demas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
    </div>
</div>

<!--servicios-->

<div class="productos-contenedor" id="productos">
    <h1>Nuestro servicios</h1>
    <div class="contenedor-producto">
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio1.jpeg" alt="">
                <h3>mantente <br>conectado</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio2.jpeg" alt="">
                <h3>Aprende nuevos temas</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio3.jpeg" alt="">
                <h3>Busca o brinda apoyo</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio4.png" alt="">   
                <h3>Comparte tu conocimiento</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio5.jpeg" alt="">
                <h3>Interactua con otras partes del mundo</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio6.jpeg" alt="">
                <h3>Networking</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio7.jpeg" alt="">
                <h3>Busca amigos</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="../public/img/servicio8.png" alt="">
                <h3>Habla con profesionales</h3>
        </div>
    </div>
</div>

<div class="footer" id="footer">
<?php include 'footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/mobile.js"></script>
</body>
</html>