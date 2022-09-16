<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Colegio Alas Peruanas</title>
    <link rel="shortcut icon" href="./public/img/icons/logo.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id='cuerpo'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- animaciones letras -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");

            header.classList.toggle("fixed-top", window.scrollY > 130);


        })

        /* $(document).ready(function() {
                        $(window).scroll(function(){

                         if ($(this).scrollTop() > 0) {
                                    $('header') . addClass ('header2');
                                } else {
                                    $('header'). removeClass ('header2');
                                            
                                }
                                        });
                            }); */
    </script>


    <?php include_once  './partials/header.php'; ?>

    <style>
        /* estilos del banner dinámico */
        /* #carouselBanner div.carousel-item img {
            height: <//?= $dataBanner['opciones']['dimensionar'] ? 'calc(' . $dataBanner['opciones']['height'] . 'vh - 90px)' : '100%' ?>;
        } */


        div.content-banner .frame-responsive {
            position: relative;
            height: 0;
            overflow: hidden;
            padding-bottom: 56.2%;
            margin-bottom: 20px;
        }

        div.content-banner .frame-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
        }

        div.content-banner video {
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
        }

        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color3);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #noticias div.card {
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            object-fit: cover;
        }

        #slider .carousel-inner {
            margin-top: -7rem;
            position: relative;
            z-index: -1;
        }

        /* #valores {

            margin-top: -150px;
            z-index: 99;
            position: relative;
        }
 
        #valores h5 {
            color: black;
        }

        #valores .container-fluid {
            background-color: rgba(255, 255, 255, .8);
            
        } */
        #valores {
            margin-top: -100px;
        }


        #valores .flip {
            height: 200px;
            padding: 0.6em;




        }

        #valores .card {

            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform .6s;
            transform-style: preserve-3d;
            border-radius: 12px;
            border-color: none;
            background-color: white;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);

        }

        #valores .front,
        #valores .back {

            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {

            color: var(--color3);


        }

        #valores .back {
            text-align: start;
            border-radius: 12px;
            color: white;
            transform: rotateY(180deg);
            background-color: var(--color4);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgba(255, 255, 255, 1) 0px 0px 0px 3px;
            padding: 0.5em;


        }

        #valores .back h4 {
            text-align: center;


        }

        #valores .back span {
            margin-left: 1px;
            margin-right: 2px;
            color: black;
            text-align: justify;


        }


        #div-valores {
            display: flex;
            border: 2px solid var(--color1);
        }

        /* 
        #bienvenidos {
            margin-top: 33px;
        } */

        #bienvenidos-parrafo {
            /* background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg'); */
            background-size: 120%;
            padding: 6rem;
            color: white;
        }

        #bienvenidos-parrafo2 {
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/ica/fachada2_ica.jpg');
            background-size: 200%;
            background-repeat: no-repeat;
            padding: 6rem;
        }

        #bienvenidos-parrafo2 p {
            color: white;
            text-align: start;
            /* padding-left: .5rem;
            padding-right: 10rem; */
        }

        #bienvenidos-parrafo p,
        #bienvenidos-parrafo h2 {
            color: black;
            /* padding-left: .5rem;
            padding-right: 10rem; */
        }

        #bienvenidos-parrafo img {
            height: 70px;
            width: 70px;
            margin-bottom: 20px;
        }

        #bienvenidos-parrafo2 img {
            height: 70px;
            width: 70px;
            margin-bottom: 20px;
        }

        .main_div {
            position: relative;
            z-index: 1;
            width: 8rem;
            height: 3rem;
        }

        .main_div::before {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: transparent;
            top: -7px;
            left: -7px;
            z-index: -5;
            border-top: 3px solid var(--color5);
            border-left: 3px solid var(--color5);
            transition: 0.5s;
        }

        .main_div::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: transparent;
            bottom: -7px;
            right: -7px;
            z-index: -5;
            border-right: 3px solid var(--color5);
            border-bottom: 3px solid var(--color5);
            transition: 0.5s;
        }

        .main_div:hover::before {
            width: 100%;
            height: 100%;
        }

        .main_div:hover::after {
            width: 100%;
            height: 100%;
        }

        .main_div button {
            padding: 0.7em 2em;
            font-size: 16px;
            background: #222222;
            color: var(--color2);
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        /* From uiverse.io by @satyamchaudharydev */
        .main_div2 {

            position: relative;
            z-index: 1;
            width: 8rem;
            height: 3rem;
        }

        .main_div2::before {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: transparent;
            top: -7px;
            left: -7px;
            z-index: -5;
            border-top: 3px solid var(--color5);
            border-left: 3px solid var(--color5);
            transition: 0.5s;
        }

        .main_div2::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: transparent;
            bottom: -7px;
            right: -7px;
            z-index: -5;
            border-right: 3px solid var(--color5);
            border-bottom: 3px solid var(--color5);
            transition: 0.5s;
        }

        .main_div2:hover::before {
            width: 100%;
            height: 100%;
        }

        .main_div2:hover::after {
            width: 100%;
            height: 100%;
        }

        .main_div2 button {
            padding: 0.7em 2em;
            font-size: 16px;
            background: var(--color1);
            color: var(--color5);
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        /* From uiverse.io by @satyamchaudharydev */
        #button2 {
            padding: 0;
            margin: 0;
            border: none;
            background: none;
        }

        #button2 {
            --primary-color: #111;
            --hovered-color: #c84747;
            position: relative;
            display: flex;
            font-weight: 600;
            font-size: 20px;
            gap: 0.5rem;
            align-items: center;
        }

        #button2 p {
            margin: 0;
            position: relative;
            font-size: 20px;
            color: black;
        }

        #button2::after {
            position: absolute;
            content: "";
            width: 0;
            left: 0;
            bottom: -7px;
            background: white;
            height: 2px;
            transition: 0.3s ease-out;
        }

        #button2 p::before {
            position: absolute;
            /*   box-sizing: border-box; */
            content: "Ver Más";
            width: 0%;
            inset: 0;
            color: var(--color1);
            overflow: hidden;
            /* transition: 0.3s ease-out; */
        }

        #button2:hover::after {
            width: 100%;
        }

        #button2:hover p::before {
            width: 100%;
        }

        #button2:hover svg {
            transform: translateX(4px);
            color: var(--color1);
        }

        #button2 svg {
            color: var(--primary-color);
            transition: 0.2s;
            position: relative;
            width: 15px;
            transition-delay: 0.2s;
        }

        #disciplinas {
            background-color: var(--color3);
            padding: 2rem;

        }


        #disciplinas img {
            display: flex;
            align-items: center;
            margin: auto;
        }

        #disciplinas h4 {
            display: flex;
            align-items: center;
            margin: auto;
            text-align: center;
            color: white;
        }

        #disciplinas p {
            padding: 1rem;
            text-align: center;
            color: white;
        }

        #propuesta {
            padding-top: 7rem;
        }

        #propuesta h3 {
            display: flex;
            margin: auto;
            align-content: center;
            justify-content: center;
        }

        #propuesta .card {
            border-radius: 0;
        }

        #propuesta .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: all .3s;
        }

        #propuesta .card figure:hover img {
            transform: scale(1.02);
        }

        #propuesta .card a {
            color: var(--color2);
            font-weight: 600;
            /* font-family: 'Roboto Slab', serif; */
        }


        #propuesta .card a:hover {
            color: var(--color5);
        }

        #propuesta .card-body a:hover {
            color: var(--color1);
        }


        #propuesta figure {
            position: relative;
        }

        #propuesta figure .btn {
            color: var(--color4);
            background: var(--color1);
            font-weight: 600;
            padding: .5rem 1rem;
            border-radius: 0;
        }

        #carreras figure .btn:hover {
            color: var(--color5);
            background: var(--color5);
        }

        #propuesta figure .figure-overlay {
            top: 0;
            left: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            /* background: rgba(0, 0, 0, .7); */
            transition: all .5s;
        }

        #propuesta figure:hover .figure-overlay {
            opacity: 1;
            visibility: visible;
        }

        #propuesta .card .card-body a {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #propuesta .card .card-body p {
            font-size: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
        }

        .line {
            position: relative;
            height: 1px;
            width: 100%;
            background: #e5e5e5;
        }

        .line::after {
            position: absolute;
            content: '';
            right: 45%;
            left: 45%;
            bottom: -1px;
            height: 3px;
            width: 10%;
            background: var(--color1);
        }

        #lema {
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 100%;
            /* background-position: center; */
            background-attachment: fixed;

        }

        #lema .container {
            padding-top: 11rem;
            padding-bottom: 11rem;
        }

        #lema .container>h2,
        em {
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        #lema h3 {
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        #contact h5 {
            font-weight: bold;
        }

        #contact p {
            color: var(--color3);
        }

        #contact .celEmail {
            margin-top: 3rem;
            border-top: 1px solid var(--color6);
            padding-top: 1rem;
            padding-bottom: 2rem;
        }

        #contact .email {
            margin-right: 8rem;
        }

        #contact .addres {
            border-top: 1px solid var(--color6);
            padding-top: 1rem;
            margin-bottom: 2rem;
        }

        #contact .redes {
            /*  border-top: 1px solid var(--color6); */
            padding-top: 2rem;
            color: var(--color1);
            display: flex;
            margin-top: 2rem;
            justify-content: center;
        }

        #contact .redes a {
            font-size: 16px;
            color: var(--color1);
            border: 1px solid var(--color1);
            text-align: center;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            padding-top: 8px;
            display: inline-block;
        }

        #contact .redes .yt:hover {
            background: #DD4B39;
            color: var(--color4);
        }

        #contact .redes .fb:hover {
            background: #3B5998;
            color: var(--color4);
        }

        #contact .redes .tw:hover {
            background: #00ACED;
            color: var(--color4);
        }

        #contact .redes .ig:hover {
            background: #DF05A7;
            color: var(--color4);
        }

        #contact .formC {
            margin-top: 3rem;
            background: var(--color5);
        }

        #contact .formC h4 {
            background: var(--color1);
            color: var(--color4);
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            padding: 1rem 2rem 2rem;
            text-align: center;
            font-size: 22px;
        }

        #contact .btn {
            background-color: var(--color3);
            color: var(--color2);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
        }

        #contact .btn:hover {
            background-color: var(--color1);
            color: var(--color2);
        }

        #contact .form-control {
            border-radius: 0;
        }

        #contact .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: var(--color1);
            outline: 0;
            border-radius: 0;
            box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
        }

        #contacto p {
            text-align: left;
        }

        #portada {
            /* background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
                url('./public/img/img-page/arequipa/fachadaarequipa.jpeg'); */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
                url('./public/img/img-page/ica/dcolegio.jpg');
            background-size: 100%;
            background-position: center;
            background-attachment: fixed;
            margin-top: -7rem;
            background-repeat: no-repeat;
        }

        #portada h2 {
            color: white;
            margin-top: 34rem;
        }

        .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
        }

        .ml6 {
            position: relative;
            font-weight: 900;
            font-size: 1.3em;
        }

        .ml6 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml6 .letter {
            display: inline-block;
            line-height: 1em;
        }

        .letter #rutaprincipal {
            color: black !important;
        }

        #infra .comments {
            /* margin: 100px; */
            width: 100%;
            border-left: solid 2px var(--color1);
            padding: 0px 20px 0px 20px;
        }

        #infra .comments p {
            background-color: #fff;
            padding: 10px;
            font-size: 16px;
            border: solid 1px var(--color6);
            line-height: 1.7;
            position: relative;
        }

        #infra p::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            display: block;
            border: 3px solid #ECB338;
            border-radius: 50%;
            background-color: #fff;
            top: 10px;
            left: -32px;
        }

        #infra p::after {
            content: '';
            position: absolute;
            border: solid 8px;
            border-color: transparent var(--color1) transparent transparent;
            top: 10px;
            left: -17px;
        }

        #infra .line {
            background-color: #DDDDDD;
            height: 2px;
            width: 100%;
            margin-top: 1rem;
        }

        @media screen and (max-width:410px) {}

        @media screen and (max-width:1200px) {}
    </style>

    <section id="portada">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="ml6">
                        <span class="text-wrapper">
                            <span class="letters" style="font-size:50px;">Eventos y Actividades </span>
                        </span>
                        <!-- <div class="separador mx-start"></div> -->
                    </h2>
                    <!-- <h2>Bienvenidos</h2>-->
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <section id="historia2">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div id="bienvenidos-parrafo" class="col-lg-6 p-0">
                    <div style="padding: 5rem;">
                        <img src="./public/img/icons/cruz.png" alt="">

                        <h2>VÍA CRUCIS</h2>
                        <br>
                        <p>El Vía Crucis es una tradición en nuestro Colegio que se
                            desarrolla desde hace más de veinte años como parte del
                            itinerario formativo. Esta actividad convoca e involucra
                            a toda la Comunidad Educativa Alas Peruanas y nos prepara
                            para vivir una Semana Santa de reflexión.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="./public/img/img-page/ica/viacrucis.jpg" width="100%" height="500" style="object-fit:cover;" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 p-0">
                    <img src="./public/img/img-page/ica/dmadre.jpg" width="100%" height="500" style="object-fit:cover;" alt="">
                </div>
                <div id="bienvenidos-parrafo2" class="col-lg-6 p-0">
                    <div style="padding: 5rem;">
                        <img src="./public/img/icons/mama.png" alt="">
                        <h2 style="color:white;">DÍA DE LA MADRE</h2>
                        <br>
                        <p class="card_text">Uno de los eventos con mayor connotación en el Colegio
                            que cuenta con la asistencia de todas las mamás de los diferentes
                            niveles, que aprecian distintas presentaciones artístico-musicales
                            preparadas por sus hijos.</p>


                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div id="bienvenidos-parrafo" class="col-lg-6 p-0">
                    <div style="padding: 5rem;">
                        <img src="./public/img/icons/padre.png" alt="">
                        <h2>DÍA DEL PADRE</h2>
                        <br>
                        <p>Una tradicional celebración que muestra la
                            integración de nuestra Comunidad, el trabajo
                            en equipo y la creatividad de nuestros alumnos y
                            padres través de gincanas en equipo.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="./public/img/img-page/ica/dpadre.jpg" width="100%" height="500" style="object-fit:cover;" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 p-0">
                    <img src="./public/img/img-page/ica/portada_eventos.jpg" width="100%" height="100%" style="object-fit:cover;" alt="">
                </div>
                <div id="bienvenidos-parrafo2" class="col-lg-6 p-0">
                    <div style="padding: 5rem;">
                        <img src="./public/img/icons/colegio.png" alt="">
                        <h2 style="color:white;">DÍA DEL COLEGIO</h2>
                        <br>
                        <p>Cada 23 de setiembre celebramos el aniversario de
                            nuestro Colegio Alas Peruanas. Un día en el
                            que toda la Comunidad celebra el Día del
                            Colegio en una especial ceremonia y
                            espectáculo artístico, para luego disfrutar
                            de Nuestra Fiesta Familiar es el evento donde
                            contamos con la mayor participación de los miembros
                            de la Comunidad Alas Peruanas, incluyendo familiares
                            y público arequipeño. Un día donde la comunidad disfruta
                            de buena música, comida, presentaciones artísticas, nuestra
                            tradicional, Bingo, y la infaltable Tómbola.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

<?php include_once  './partials/footer.php'; ?>


<!-- Script para carousel automatico -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let owlone = $('#owl-one');
    let owltwo = $('#owl-two');

    owlone.owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 5,
            },
        },
    });

    owltwo.owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
</script>
<script>
    addEventListener('DOMContentLoaded', () => {
        const contadores = document.querySelectorAll('.contador_cantidad')
        const velocidad = 10000000000

        const animarContadores = () => {
            for (const contador of contadores) {
                const actualizar_contador = () => {
                    let cantidad_maxima = +contador.dataset.cantidadTotal,
                        valor_actual = +contador.innerText,
                        incremento = cantidad_maxima / velocidad

                    if (valor_actual < cantidad_maxima) {
                        contador.innerText = Math.ceil(valor_actual + incremento)
                        setTimeout(actualizar_contador, 70)
                    } else {
                        contador.innerText = cantidad_maxima
                    }
                }
                actualizar_contador()
            }
        }
        //IntersectionObserver
        const mostrarContadores = elementos => {
            elementos.forEach(elemento => {
                if (elemento.isIntersecting) {
                    elemento.target.classList.add('animar')
                    elemento.target.classList.remove('ocultar')
                    setTimeout(animarContadores, 600)
                }
            });
        }
        const observer = new IntersectionObserver(mostrarContadores, {
            threshold: 0.75 //0-1
        })

        const elementosHTML = document.querySelectorAll('.contador')
        elementosHTML.forEach(elementoHTML => {
            observer.observe(elementoHTML)
        })
    })
</script>


<script>
    AOS.init();
</script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml6 .letter',
            translateY: ["1.1em", 0],
            translateZ: 0,
            duration: 750,
            delay: (el, i) => 50 * i
        }).add({
            targets: '.ml6',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>




</html>