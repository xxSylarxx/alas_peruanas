<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
$active7 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' active';
        break;
    case 'historia.php':
    case 'infraestructura.php':
    case 'equipo.php':
        $active2 .= ' active';
        break;
    case 'inicial.php':
    case 'primaria.php':
    case 'secundaria.php':
        $active3 .= ' active';
        break;
    case 'areas.php':
        $active4 .= ' active';
        break;
    case 'arte.php':
    case 'deporte.php':
    case 'eventos.php':
    case 'enfermeria.php':
        $active5 .= ' active';
        break;
    case 'noticias.php':

        $active6 .= ' active';
        break;
    case 'admision.php':
    case 'matricula.php':
        $active7 .= ' active';
        break;
}
?>




<!-- <div id="head-top"></div> -->
<header class="" id="header">


    <nav class="navbar navbar-expand-lg navbar-light  py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img class="logo img-fluid" src="./public/img/icons/logo.png" alt="logo">
                <span class="px-3">ALAS PERUANAS<br>&nbsp;&nbsp;&nbsp;&nbsp;AREQUIPA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="boton text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="<?= $active1 ?>" href="index.php">INICIO</a>
                    </li>
                    <!-- <span id="separador"></span> -->
                    <li class="nav-item dropdown">

                        <a class="<?= $active2 ?> dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NOSOTROS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <li><a class="dropdown-item" href="./bienvenidos.php">BIENVENIDOS</a></li> -->
                            <li><a class="dropdown-item" href="./historia.php">RESEÑA HISTÓRICA</a></li>
                            <li><a class="dropdown-item" href="./infraestructura.php">INFRAESTRUCTURA</a></li>
                            <li><a class="dropdown-item" href="./public/files/reglamento.pdf" target="_blank">REGLAMENTO INTERNO</a></li>
                            <li><a class="dropdown-item" href="./equipo.php">EQUIPO</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="<?= $active3 ?> dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NIVELES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./inicial.php">INICIAL</a></li>
                            <li><a class="dropdown-item" href="./primaria.php">PRIMARIA</a></li>
                            <li><a class="dropdown-item" href="./secundaria.php">SECUNDARIA</a></li>

                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="<?= $active4 ?>" href="./areas.php">ÁREAS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="<?= $active5 ?> dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VIDA ESCOLAR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./arte.php">ARTE</a></li>
                            <li><a class="dropdown-item" href="./deporte.php">DEPORTES</a></li>
                            <li><a class="dropdown-item" href="./eventos.php">EVENTOS Y ACTIVIDADES</a></li>
                            <li><a class="dropdown-item" href="./enfermeria.php">SERVICIO DE ENFERMERIA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="<?= $active6 ?>" href="./noticias.php">NOTICIAS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="<?= $active7 ?> dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ADMISIÓN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./admision.php">PROCESO DE ADMISIÓN</a></li>
                            <li><a class="dropdown-item" href="./matricula.php">MATRÍCULA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<!-- <script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('head-top').style.height = height + "px";
</script> -->

<script type="text/javascript">
    function validar() {

        var copia = document.getElementById("txtcopia").value;
        var captcha = document.getElementById("captcha").value;

        if (copia == captcha) {
            window.open("http://www.google.com.pe");
        } else {
            alert("El codigo Ingresado no coincide");
        }
    }
</script>

<!-- <script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        var img1 = './assets/img/icons/logo.png';
        var img2 = './assets/img/icons/logo2.png';

        var boton1 = 'text-white';
        var boton2 = 'text-black';

        header.classList.toggle("abajo", window.scrollY > 150);
        document.querySelector(".logo").setAttribute("src", window.scrollY > 150 ? img2 : img1)
        document.querySelector(".boton").setAttribute("class", window.scrollY > 150 ? boton1 : boton2)
    })
</script> -->