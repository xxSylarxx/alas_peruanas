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
            color:black;
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
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/fachada1.jpg');
            background-size: 120%;
            padding: 6rem;

        }

        #bienvenidos-parrafo2 {
            background: linear-gradient(rgba(0, 0, 0, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/fachada1.jpg');
            background-size: 120%;
            padding: 6rem;

        }

        #historia {
            background: linear-gradient(rgba(0, 0, 0, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/fachada1.jpg');
            background-size: 100%;
            padding: 2rem;

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
                url('./public/img/img-page/fachada1.jpg');
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



        @media screen and (max-width:410px) {}

        @media screen and (max-width:1200px) {}
    </style>
    <section id="slider">
        <div class="container-fluid content-banner px-0">
            <div id="carouselBanner" class="carousel slide pointer-event" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class=""></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/img/banner/secundariabanner.jpg" class="d-block crop w-100" style="height:105vh;object-fit:cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/banner/secundariabanner.jpg" class="d-block crop w-100" style="height:105vh;object-fit:cover;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="container" id="valores">


        <div class="row justify-content-center">

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./public/img/icons/libertad.png" width="50" alt=""></span>


                            <h5 class="py-2">Libertad</h5>

                        </div>

                        <div class="back">
                            <!-- <h4 class="py-2">Expand your Expertise</h4> -->
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./public/img/icons/solidaridad.png" width="50" alt=""></span>


                            <h5 class="py-2">Solidaridad</h5>

                        </div>

                        <div class="back">
                            <!-- <h4 class="py-2">Gain <br>Agility</h4> -->
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./public/img/icons/responsabilidad.png" width="50" alt=""></span>


                            <h5 class="py-2">Responsabilidad</h5>

                        </div>

                        <div class="back">
                            <!-- <h4 class="py-2">Ensure Confidentiality</h4> -->
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./public/img/icons/respeto.png" width="50" alt=""></span>


                            <h5 class="py-2">Respeto</h5>

                        </div>

                        <div class="back">
                            <!-- <h4 class="py-2">Achieve Efficiency</h4> -->
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./public/img/icons/honestidad.png" width="50" alt=""></span>


                            <h5 class="py-2">Honestidad</h5>

                        </div>

                        <div class="back">
                            <!-- <h4 class="py-2">Get Competitive Rates</h4> -->
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
   <!--  <section id="valores" class="animate__animated animate__zoomIn">
        <div class="container-fluid p-5">
            <div class="row d-flex ">
                <div class="col-lg d-flex justify-content-center mx-3">
                    <img src="./public/img/icons/libertad.png" class="img-fluid" width="50" height="50" alt="">
                    <h5 class="my-auto mx-3">Libertad</h5>
                    
                </div>

                <div class="col-lg d-flex justify-content-center mx-3"><img src="./public/img/icons/solidaridad.png" class="img-fluid" width="50" height="50" alt="">
                    <h5 class="my-auto mx-3">Solidaridad</h5>
                    
                </div>

                <div class="col-lg d-flex justify-content-center mx-3"><img src="./public/img/icons/responsabilidad.png" class="img-fluid" width="50" height="50" alt="">
                    <h5 class="my-auto mx-3">Responsabilidad</h5>
                    
                </div>

                <div class="col-lg d-flex justify-content-center mx-3"><img src="./public/img/icons/respeto.png" class="img-fluid" width="50" height="50" alt="">
                    <h5 class="my-auto mx-3">Respeto</h5>
                    
                </div>

                <div class="col-lg d-flex justify-content-center mx-3"><img src="./public/img/icons/honestidad.png" class="img-fluid" width="50" height="50" alt="">
                    <h5 class="my-auto mx-3">Honestidad</h5>
                </div>
            </div>
        </div>

    </section> -->
    <section id="bienvenidos">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-lg-6 p-0"><img src="./public/img/img-page/bienvenidos.jpeg" width="100%" height="100%" alt=""></div>
                <div id="bienvenidos-parrafo" class="col-lg-6">
                    <h1 style="color:white;">Bienvenidos</h1>
                    <p style="color:white;">Bienvenidos a los Colegios Alas Peruanas y gracias por considerarnos como una posibilidad para la educación de sus hijos.</p>
                    <p style="color:white;">Contamos con dos colegios uno ubicado en la ciudad de
                        Arequipa y el otro en la ciudad de Ica, ambas instituciones forman parte de la promotora
                        Inversiones Educativas IESCOOP SAC. Tenemos una amplia experiencia; el colegio de Arequipa
                        quien cumple 30 años de servicio y el colegio de Ica quien cumple 23 años sirviendo a la
                        comunidad de Ica.</p>
                    <br>
                    <div class="main_div">
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="historia2">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div id="bienvenidos-parrafo2" class="col-lg-6 p-0">
                    <div style="padding: 5rem;">
                        <h1 class="px-3 text-white">Nuestra Historia</h1>
                        <br>
                        <p class="px-3 text-white">Institución Educativa ubicada en la Urb. Aproviord B-6 ASVEA
                            del distrito de Arequipa, siendo su actual director el Lic. German Chipana Huanca,
                            en su local cuenta con los niveles de Inicial, Primaria y Secundaria perteneciente a
                            la promotora INVERSIONES EDUCATIVAS IESCOOP SAC.
                        </p>
                        <p class="px-3 text-white">Con Resolución Directoral 01256 de la Dirección Regional de Educación de Arequipa con
                            fecha 12 de diciembre del año 1992 se inicia la institución educativa con el nombre de
                            Sor Ana de los Ángeles y de Jesús en el local ubicado en la Av. La Salle en el año 1994,
                            luego se traslada a su propio local. Por Resolución Directoral Nº 01091 de la unidad de
                            servicios educativos Arequipa Sur se cambia el nombre a Centro Educativo Particular Alas
                            Peruanas desde el año 1998.</p>
                        <br>
                        <!-- <button class="px-3" id="button2">
                            <p>Ver Más</p>
                            <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button> -->
                        <div class="main_div2">
                            <button>Ver Más</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="./public/img/img-page/bienvenidos.jpeg" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--  <section id="historia">
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row d-flex">
                        <div class="col-lg-2">
                            <img class="logo img-fluid" src="./public/img/icons/logo.png" alt="logo">
                        </div>
                        <div class="col-lg-8">
                            <span class="py-5 text-white">COLEGIOS ALAS PERUANAS</span>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-white">NUESTRA HISTORIA</h4>
                </div>
                <div class="col-lg-6">
                    <p style="color:white;">Institución Educativa ubicada en la Urb. Aproviord B-6 ASVEA
                        del distrito de Arequipa, siendo su actual director el Lic. German Chipana Huanca,
                        en su local cuenta con los niveles de Inicial, Primaria y Secundaria perteneciente a
                        la promotora INVERSIONES EDUCATIVAS IESCOOP SAC.
                    </p>
                    <p style="color:white;">Con Resolución Directoral 01256 de la Dirección Regional de Educación de Arequipa con
                        fecha 12 de diciembre del año 1992 se inicia la institución educativa con el nombre de
                        Sor Ana de los Ángeles y de Jesús en el local ubicado en la Av. La Salle en el año 1994,
                        luego se traslada a su propio local. Por Resolución Directoral Nº 01091 de la unidad de
                        servicios educativos Arequipa Sur se cambia el nombre a Centro Educativo Particular Alas
                        Peruanas desde el año 1998.</p>
                    <br>
                    <button id="button2">
                        <p>Ver Más</p>
                        <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section> -->


    <section id="propuesta">
        <div class="container">
            <h3>NUESTRA PROPUESTA EDUCATIVA</h3>
        </div>
        <br>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/inicial.jpg" alt="inicial">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="#" class="card-title">INICIAL</a>
                            <div class="line"></div>
                            <br>
                            <p class="">La educación en el nivel inicial de los Colegios Alas
                                Peruanas, se centra en la atención integral de niños y niñas de
                                3, 4 y 5 años. Es el nivel que establece las bases de la formación
                                de una personalidad integra y protagónica, a través de su participación
                                activa en los contextos de juego y en los proyectos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/primaria.jpg" alt="primaria">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="#" class="card-title text-center">PRIMARIA</a>
                            <div class="line"></div>
                            <br>
                            <p>La educación primaria, en el marco de la formación integral,
                                busca desarrollar en el niño y niña el conocimiento científico,
                                la creatividad, el trabajo en equipo y el ejercicio de su ciudadanía
                                de forma protagónica.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/secundaria.jpg" alt="secundaria">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="#" class="card-title">SECUNDARIA</a>
                            <div class="line"></div>
                            <br>
                            <p>Nuestro proyecto curricular en el nivel secundaria profundiza y
                                afianza una formación cristiana – católica, científica,
                                humanística y tecnológica a los adolescentes. El perfil de
                                nuestros estudiantes se orienta al desarrollo de competencias
                                para la vida, el trabajo y el ejercicio de la ciudadanía,
                                desarrollándose en grupos heterogéneos y de un modo autónomo. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section id="disciplinas">
        <br>
        <br>
        <br>
        <div class="container">
            <h4>FORMAMOS A NUESTROS ESTUDIANTES DE FORMA INTEGRAL Y ENFOCADOS A LA OBTENCIÓN DE LOGROS</h4>
            <br>
            <br>
            <br>
            <div class="row ">
                <div class="col-lg-3">
                    <img src="./public/img/icons/natacion.png" class="img-fluid" height="100" width="100" alt="">
                    <p>Natación</p>
                </div>
                <div class="col-lg-3">
                    <img src="./public/img/icons/ciclismo.png" class="img-fluid" height="100" width="100" alt="">
                    <p>Ciclismo</p>
                </div>
                <div class="col-lg-3">
                    <img src="./public/img/icons/pintura.png" class="img-fluid" height="100" width="100" alt="">
                    <p>Pintura</p>
                </div>
                <div class="col-lg-3">
                    <img src="./public/img/icons/desfile.png" class="img-fluid" height="100" width="100" alt="">
                    <p>Desfiles Escolares</p>
                </div>



            </div>
            
    </section>
    
    <section id="lema">
        <div class="container">
            <h2>30 años al servicio de la educación</h2>
            <em>formando líderes con pensamiento crítico y creativos</em>
            <br>
            <h3>ADMISÓN 2023</h3>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section id="noticias">
        <div class="container">
            <h3>NOTICIAS</h3>
            <p style="color:var(--color1);">Todas las Noticias</p>
            <div class="row">
                <div class="col-lg-4">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=8">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/aniversarioarequipa.jpg" width="100%" height="250">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">¡Feliz 482° aniversario, Arequipa!</h5>

                                <div class="detalle">

                                    Porque no se nace en vano al pie de un volcán, hoy estás de fiesta y son muchas las razones para sentirse orgulloso de ser parte de esta hermosa Ciudad Blanca
                                </div>

                            </div>

                            <div class="card-footer" style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">15-08-2022</span>

                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=7">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/cachimbo.jpg" width="100%" height="250">

                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">FELICIDADES CACHIMBO 2023</h5>

                                <div class="detalle">
                                    Felicidades estimado alumno, ahora empiezas una nueva etapa, estamos
                                    seguros que te ira bien en su carrera profesional.Alas Peruanas “Educación para la vida”
                                </div>

                            </div>

                            <div class="card-footer" style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">10-08-2022</span>

                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=5">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/ajedrez.jpg" width="100%" height="250">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">CAMPEONATO NACIONAL DE AJEDREZ</h5>

                                <div class="detalle">

                                    Felicitamos a nuestra alumna Del Carpio Encinas Fernanda Romina, que clasifico para el Campeonato Nacional de Ajedrez, evento que se realizara capital de Lima.
                                </div>

                            </div>

                            <div class="card-footer " style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2 ">10-07-2022</span>

                            </div>

                        </div>
                    </a>
                </div>


            </div>


    </section>
    <br>
    <br>
    <br>
    <section id="contacto">
        <div class="container mt-5" id="contact">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h2 class="title">INFORMACIÓN DE CONTACTO</h2>
                    <!-- <div class="separador"></div> -->
                    <div class="d-flex  celEmail">
                        <div class="d-flex">
                            <span class="me-4"> <i class="fas fa-phone-alt fa-lg" style="color: var(--color1);"></i> </span>
                            <div class="col-lg-3">
                                <h5>Teléfonos</h5>
                                <p class="mt-3 text">054 237216 - 994344681</p>
                            </div>
                            <div class="d-flex ">
                                <span class="me-4"> <i class="fas fa-envelope fa-lg" style="color: var(--color1);"></i> </span>
                                <div class="col-lg">
                                    <h5>Email</h5>
                                    <a href="mailto:admision-alasperuanas_aqp@iepap.edu.pe" class="mt-3 text" style="color: var(--color3);font-family: 'helvetica', sans-serif;">admision-alasperuanas_aqp@iepap.edu.pe</a><br>
                                    <a href="mailto:iepalasperuanasaqp@iepap.edu.pe" class="mt-3 text" style="color: var(--color3);font-family: 'helvetica', sans-serif;
                                    text-align: justify;">iepalasperuanasaqp@iepap.edu.pe</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="d-flex email">
                        <span class="me-4"> <i class="fas fa-envelope fa-lg" style="color: var(--color1);"></i> </span>
                        <div>
                            <h5>Email</h5>
                            <a href=" mailto:southerntechnologicalinstitute@gmail.com" class="mt-3" style="color: var(--color5);">southerntechnologicalinstitute@gmail.com</a>
                        </div>
                    </div> -->
                    </div>
                    <!-- <div class="d-flex addres">
                        <span class="me-4"> <i class="fas fa-envelope fa-lg" style="color: var(--color1);"></i> </span>
                        <div>
                            <h5>Email</h5>
                            <a href="mailto:admision-alasperuanas_aqp@iepap.edu.pe" class="mt-3 text" style="color: var(--color3);font-family: 'helvetica', sans-serif;
                                    text-align: justify;">admision-alasperuanas_aqp@iepap.edu.pe</a><br>
                            <a href="mailto:iepalasperuanasaqp@iepap.edu.pe" class="mt-3 text" style="color: var(--color3);font-family: 'helvetica', sans-serif;
                                    text-align: justify;">iepalasperuanasaqp@iepap.edu.pe</a>
                        </div>
                    </div> -->
                    <div class="d-flex addres">
                        <span class="me-4"> <i class="fas fa-map-marker-alt fa-lg" style="color: var(--color1);"></i> </span>
                        <div>
                            <h5>Dirección</h5>
                            <p class="mt-3 text">Urb. Aproviord B-6 ASVEA – AREQUIPA (entre av. Los incas y Parque Lambramani)</p>
                        </div>
                    </div>
                    <div class="d-flex addres">
                        <span class="me-4"> <i class="fas fa-clock fa-lg" style="color: var(--color1);"></i> </span>
                        <div>
                            <h5>Horario de Atención</h5>
                            <p class="mt-3 text">Lunes a viernes de 7:45 a 16:30 / Sábados de 9:00 a 12:00</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" id="contact">
                    <h2 class="title">ENVÍANOS UN MENSAJE</h2>
                    <!-- <div class="separador"></div> -->

                    <div class="formC">
                        <form onsubmit="enviarCorreo(event)" id="formContacto">
                            <div class="row d-flex">
                                <div class="col">
                                    <input class="form-control form-control-lg mt-3" type="text" placeholder="Nombre*" name="nombre" required="">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-lg mt-3" type="text" placeholder="Correo*" name="celular" required="">
                                </div>
                            </div>
                            <input class="form-control form-control-lg mt-3" type="text" placeholder="Asunto*" name="correo" required="">
                            <div class="mt-3">
                                <textarea class="form-control form-control-lg" rows="3" placeholder="Mensaje*" name="mensaje" required=""></textarea>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button class="btn" type="submit">
                                    ENVIAR
                                </button>
                                <div class=" d-flex justify-content-center align-items-center mt-2 mb-3 ms-md-0 ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" value="si" required="">
                                    <label class="ms-3" style="font-size: 14px; cursor: pointer;">"He leído y acepto las politicas de privacidad"</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="redes">
                        <div class="red">
                            <a class="yt" href="#" target="_blank">
                                <span><i class="fab fa-youtube"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="fb" href="https://www.facebook.com/Colegio-Alas-Peruanas-AQP-100289138340360/?ref=pages_you_manage" target="_blank">
                                <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="tw" href="#" target="_blank">
                                <span><i class="fab fa-twitter"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="ig" href="https://www.instagram.com/colegio_alas_peruanas/" target="_blank">
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="gps">
        <div class="container-fluid mt-5 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19287.976251023552!2d-71.53499748355216!3d-16.413698288783923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b0280a1a649%3A0x26d710e3351b4c46!2sColegio%20Alas%20Peruanas%2C%20Arequipa%2004002!5e0!3m2!1ses-419!2spe!4v1660755941242!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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





</html>