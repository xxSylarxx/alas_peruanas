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
                <span class="px-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COLEGIOS<br>ALAS PERUANAS</span>
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
                            <li><a class="dropdown-item" href="./historia.php">BIENVENIDOS</a></li>
                            <li><a class="dropdown-item" href="./somos.php">QUIENES SOMOS</a></li>
                            <li><a class="dropdown-item" href="./valores.php">VALORES INSTITUCIONALES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="<?= $active3 ?>" href="./educativa.php">PROPUESTA EDUCATIVA</a>
                    </li>
                    <li class="nav-item ">
                        <a class="<?= $active4 ?>" href="./areas.php">PERFIL DEL EGRESADO</a>
                    </li>
                    <li class="nav-item ">
                        <a class="<?= $active5 ?>" href="./areas.php">TALLERES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="<?= $active6 ?> dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">PSICOPEDAG0GICO</a></li>
                            <li><a class="dropdown-item" href="#">COECE</a></li>
                            <li><a class="dropdown-item" href="#">TUTORÍA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<?php include_once  './partials/flotante.php'; ?>
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