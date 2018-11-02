<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <title>StemproCell</title>
</head>
<body>
<?php $pageName = basename($_SERVER['PHP_SELF']); ?>
<div class="container" id="header">
    <div class="clearfix d-block d-lg-none">
        <br>
    </div>
    <div class="col-sm-12 d-flex flex-row-reverse text-right " id="socialIcons">
        <ul class="navbar-nav flex-row d-none d-lg-flex">
            <li class="nav-item"><a class="nav-link px-2 icon whatsapp" href="#"></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa"> 809-555-6666</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 icon facebook" href="#">
<!--                    <span class="fa fa-facebook"></span>-->
                </a>
            </li>
            <li class="nav-item"><a class="nav-link px-2 icon twitter" href="#"></a></li>
            <li class="nav-item"><a class="nav-link px-2 icon youtube" href="#"></a></li>
            <li class="nav-item"><a class="nav-link px-2 icon instagram" href="#"></a></li>
        </ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navStempro">

        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"></span>
            <a class="navbar-brand d-inline-block" href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
            <div class="d-flex flex-row order-2 order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse flex-grow-1 text-right" id="mainNav">
            <ul class="navbar-nav ml-auto flex-nowrap" id="navBarItems">
                <li class="nav-item <?php if ($pageName === 'index.php') {
                    echo ' active';
                } ?>">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if ($pageName === 'nosotros.php') {
                    echo ' active';
                } ?>">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if ($pageName === 'tratamientos_clinicos.php') {
                        echo ' active';
                    } ?>" href="#" id="terapias" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Tratamientos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="terapias">
                        <a class="dropdown-item <?php if ($pageName === 'tratamientos_clinicos.php') {
                            echo ' active';
                        } ?>" href="tratamientos_clinicos.php">Uso Clinico</a>
                        <a class="dropdown-item <?php if ($pageName === 'tratamientos_cosmeticos.php') {
                            echo ' active';
                        } ?>" href="tratamientos_cosmeticos.php">Uso Cosmetico</a>
                        <a class="dropdown-item <?php if ($pageName === 'tratamientos_ort_trm.php') {
                            echo ' active';
                        } ?>" href="tratamientos_ort_trm.php">Uso en Ortopedia y Traumatologia</a>
                    </div>
                </li>
                <li class="nav-item <?php if ($pageName === 'faq.php') {
                    echo ' active';
                } ?>">
                    <a class="nav-link" href="faq.php">Preguntas</a>
                </li>
                <li class="nav-item <?php if ($pageName === 'testimonios.php') {
                    echo ' active';
                } ?>">
                    <a class="nav-link" href="testimonios.php">Testimonios</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if (strpos($pageName, 'instala') !== false) {
                        echo ' active';
                    } ?>" href="#" id="instalaciones" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Instalaciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="instalaciones">
                        <a class="dropdown-item <?php if ($pageName === 'instalaciones_usa.php') {
                            echo ' active';
                        } ?>" href="instalaciones_usa.php">Estados Unidos</a>
                        <a class="dropdown-item <?php if ($pageName === 'instalaciones_rd.php') {
                            echo ' active';
                        } ?>" href="instalaciones_rd.php">Republica Dominicana</a>
                    </div>
                </li>


                <li class="nav-item <?php if ($pageName === 'contacto.php') {
                    echo " active";
                } ?>">
                    <a class="nav-link" href="contacto.php">Contactenos</a>
                </li>
            </ul>
        </div>
    </nav>

</div>


<!--END OF NAV BAR-->