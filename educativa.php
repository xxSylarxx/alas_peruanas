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


        #valores .flip {
            height: 200px;
            padding: 0.6em;
        }

        #valores h5 {
            padding-right: 2rem;
            padding-left: 2rem;
            font-size: 15px !important;
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

        #valores .card:hover {
            transform: scale(1.08);
        }

        /* #valores .flip:nth-child(5):hover .card {
            transform: rotateY(180deg);
        } */

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







        #bienvenidos-parrafo2 p {
            color: black;
            text-align: start;
            padding-left: .5rem;
            padding-right: 10rem;

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

        /*  #bienvenidos-parrafo2 {
            background: linear-gradient(rgba(0, 0, 0, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 120%;
            padding: 6rem;

        } */

        /* #historia {
            background: linear-gradient(rgba(129, 17,19, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 100%;
            padding: 2rem;

        } */


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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, .4)),
                url('./public/img/img-page/portada_propuesta_principal.jpg');
            /* background:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); */
            background-size: 100%;
            /* background-position: center; */
            background-attachment: fixed;
            margin-top: -12rem;

        }

        #portada h2 {
            color: white;
            margin-top: 34rem;
        }

        .bgmusica {
            opacity: .08;
            filter: brightness(100%) contrast(100%) saturate(0%) blur(0) hue-rotate(0deg);
            position: absolute;
            height: 100%;
            top: 120%;
            left: 8%;
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

        #importantes {
            padding-top: 8rem;
            padding-bottom: 8rem;
            color: white;
            background: linear-gradient(to top,
                    rgba(27, 36, 52, 255) 100%,
                    #ffff 10%,
                    #ffff 50%);
        }

        #contadorparrafo {
            text-align: center;
            font-size: .9rem;
            color: var(--color7);
        }

        /* Estilos para animacion de contador de datos importantes */
        .contador_cantidad {
            text-align: center;
            font-size: 40px;
            font-weight: bold;
        }

        @keyframes aparecer {
            0% {
                opacity: 0;
                transform: translateY(100px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .ocultar {
            opacity: 0;
        }

        .animar {
            animation: aparecer 1.3s;
        }

        /* para ocultar los iconos por defecto*/

        .accordion-button:not(.collapsed)::after {

            content: "";

            background-image: url("");

        }

        .accordion-button::after {

            width: 0px;

            height: 0px;

            content: "";

            background-image: url("");

            background-size: 0px;
        }

        /* color y tamaño en modo activo */

        .accordion-button:not(.collapsed) div.boton-icono {

            color: var(--color5);

            font-size: 20px;

            -webkit-transform: rotate(90deg);

            transform: rotate(90deg);

        }

        /* color y tamaño */

        .accordion-button div.boton-icono {

            color: var(--color1);

            font-size: 20px;

            transition: -webkit-transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;

        }

        .accordion-button {

            font-weight: bold;

            color: var(--color1);

            font-size: 17.5px;
        }

        .accordion-button:hover {

            color: var(--color1);

        }

        .accordion-flush .accordion-item {

            border-bottom: 0;
        }

        .accordion-button:not(.collapsed) {

            color: var(--color5);
            background-color: var(--color1) !important;
        }

        .accordion-button {
            background-color: var(--color8) !important;
            border-radius: 50px;
            /* border-bottom: 2px solid var(--color1); */
        }

        .accordion-button:focus {
            border-color: var(--color1) !important;
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);

        }

        .accordion-item {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        #metodologicos span {
            font-weight: 900;
            font-size: 3.5rem;
            display: flex;
            justify-content: center;
            color: var(--color1);
        }

        #metodologicos .container {
            padding-left: 8%;
            padding-right: 8%;
        }




        @media screen and (max-width:1300px) {
            .bgmusica {
                opacity: .08;
                filter: brightness(100%) contrast(100%) saturate(0%) blur(0) hue-rotate(0deg);
                position: absolute;
                height: 100%;
                top: 200%;
                left: 10%;
            }

        }

        @media screen and (max-width:500px) {
            .bgmusica {
                display: none;
            }

            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, .1)),
                    url('./public/img/img-page/portada_propuesta_principal.jpg');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: bottom;
                /*  background-attachment: fixed; */

            }

            #portada h2 {
                margin-top: 18rem;

            }

            #portada span {
                display: none;

            }
        }
    </style>

    <section id="portada">
        <div class="container">
            <img class="bgmusica" src="./public/img/icons/dios.png" alt="">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="ml6">
                        <span class="text-wrapper">
                            <span class="letters" style="font-size:50px;">Propuesta Educativa
                            </span>
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
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div id="bienvenidos-parrafo" class="col-lg-12 p-0">
                    <div class="my-auto" style="padding: 3rem;">
                        <center>
                            <h2 style="text-align:center;color:var(--color1);">LINEAMIENTOS METODOLÓGICOS</h2>
                        </center>
                        <br>
                        <p>El enfoque adoptado por la institución
                            educativa está en coherencia al modelo de persona y
                            sociedad en el marco del perfil de egreso del actual
                            currículo nacional de educación básica y basado en nuestro
                            Proyecto Educativo Institucional.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

    </section>


    <section id="metodologicos">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4">
                    <span>1</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush1">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">EL DESARROLLO DE COMPETENCIAS</div>
                                    </button>
                                </h2>
                                <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Permite tomar conciencia de cómo, qué y con qué aprender,
                                                    en ese sentido se busca que el estudiante aprenda a aprender
                                                    de sí mismo y con autonomía, utilizando recursos y aplicando
                                                    estrategias.</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>2</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush1">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">EL ACOMPAÑAMIENTO PERMANENTE</div>
                                    </button>
                                </h2>
                                <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Permite que los estudiantes logren el máximo
                                                    desarrollo de sus potencialidades, capacidades y establecimiento de metas.</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
                <div class="col-lg-4">
                    <span>3</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">EL CLIMA AFECTIVO</div>
                                    </button>
                                </h2>
                                <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Es constante en la comunidad educativa, el encuentro entre
                                                    estudiantes, maestros y tutores tiene base socio afectiva en
                                                    busca de formar vínculos positivos que les permita abrirse al
                                                    diálogo y propiciar espacios de reflexión.</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <span>4</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LA EVALUACIÓN FORMATIVA</div>
                                    </button>
                                </h2>
                                <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p> Es una poderosa herramienta utilizada por los maestros
                                                    como medio a través del cual observan sistemática y
                                                    permanentemente, como los estudiantes desarrollan sus
                                                    aprendizajes. En este proceso de seguimiento continuo
                                                    debemos poner en práctica la reflexión aguda, el análisis
                                                    de las causas y las diversas situaciones que influyen en la
                                                    calidad de los aprendizajes con el fin de actuar de manera oportuna
                                                    y pertinente a lo largo de todo el proceso de enseñanza y aprendizaje.
                                                    Constituye además al estudiante como el verdadero protagonista de qué debe
                                                    aprender, cómo debe hacerlo y cuán bien debe realizarlo.

                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>5</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">EL ENFOQUE DE INVESTIGACIÓN</div>
                                    </button>
                                </h2>
                                <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Orienta a los maestros a un proceso de enseñanza
                                                    científica y tecnológica, sustentando en la
                                                    construcción activa del conocimiento a través
                                                    de proyectos experimentales.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>6</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item6" aria-expanded="false" aria-controls="item6">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LOS ENFOQUES TRANSVERSALES</div>
                                    </button>
                                </h2>
                                <div id="item6" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Que permiten propiciar las condiciones
                                                    para la construcción de posiciones éticas
                                                    y orientar el sentido del ejercicio ciudadano
                                                    de los actores educativos donde valores y actitudes
                                                    adquieren su sentido más integral. Así mismo, sirven
                                                    como marco teórico y metodológico que orienta el proceso
                                                    educativo.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-lg-4">
                    <span>7</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item7" aria-expanded="false" aria-controls="item7">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">VALORES DE LA INSTITUCIÓN </div>
                                    </button>
                                </h2>
                                <div id="item7" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p> Guían y dan sentido en la acción de los diferentes
                                                    integrantes de la comunidad educativa, así también
                                                    configuran el comportamiento de las personas de la
                                                    institución y determinan sus relaciones.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>8</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item8" aria-expanded="false" aria-controls="item8">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LA VIDA ACTIVA Y SALUDABLE</div>
                                    </button>
                                </h2>
                                <div id="item8" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Como práctica permanente dentro y fuera
                                                    de la institución, promoviendo un conjunto
                                                    de comportamientos y actitudes cotidianas para
                                                    mantener el cuerpo y la mente de una manera adecuada,
                                                    desde la prevención hasta la promoción de actividades
                                                    recreativas, deportivas y artísticas.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <span>9</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item9" aria-expanded="false" aria-controls="item9">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LOS PROYECTOS DE APRENDIZAJE</div>
                                    </button>
                                </h2>
                                <div id="item9" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Contienen elementos fundamentales
                                                    integradores de aprendizaje significativo
                                                    para volver al estudiante protagonista, a
                                                    través de una participación activa donde toman
                                                    decisiones en él qué y cómo hacer, desarrollando
                                                    sus competencias de manera integral.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-lg-5">
                    <span>10</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item10" aria-expanded="false" aria-controls="item10">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LA CULTURA AMBIENTAL</div>
                                    </button>
                                </h2>
                                <div id="item10" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Se desarrolla a través de estrategias integradoras y dinamizadoras
                                                    que promueven la transversalización del enfoque ambiental en la
                                                    gestión escolar, contribuyendo al desarrollo de competencias,
                                                    valores y actitudes que hagan frente a problemáticas y oportunidades locales
                                                    y globales como el cambio climático, el fortalecimiento de la formación ciudadana
                                                    y ciudadanos con conciencia ambiental que contribuyan al desarrollo sostenible.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <span>11</span>
                    <div id="acordiondesafios" class="col-lg">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush2">
                                    <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item11" aria-expanded="false" aria-controls="item11">
                                        <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                        <div class="w-100 title-pe mx-3">LAS COMPETENCIAS DIGITALES</div>
                                    </button>
                                </h2>
                                <div id="item11" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span>
                                                <p>Se incorporan como una competencia transversal
                                                    dentro de un “modelo de aprovechamiento de las TIC”,
                                                    que busca la optimización del aprendizaje y de las actividades
                                                    educativas en los entornos proporcionados por las mismas. Estas
                                                    competencias se van desarrollando en el nivel inicial y primaria
                                                    con la alfabetización digital, cuyo propósito es desarrollar en los
                                                    estudiantes habilidades para buscar, interpretar, comunicar y construir
                                                    información de manera eficiente y en forma colaborativa; para continuar
                                                    en el nivel secundaria, manteniéndonos a la vanguardia de las exigencias
                                                    de la sociedad actual.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="container" id="valores">
        <center>
            <h3>ENFOQUES TRANSVERSALES</h3>
            <br>
            <br>
        </center>
        <p>Los enfoques transversales se traducen en formas específicas de actuar que buscan generar
            una buena convivencia, por lo tanto, son deseables para todos. Son valores y actitudes, que
            tanto estudiantes como docentes y autoridades deben esforzarse por demostrar en la dinámica
            diaria de la I.E.</p>
        <br>
        <div class="row justify-content-center">

            <div class="col-lg p-0 ">
                <div class="flip mx-1">
                    <div class="card shadow ">
                        <div class="front ">
                            <span class="fs-1"><img src="./public/img/icons/libertad.png" width="50" alt=""></span>
                            <h5 class="py-2">Enfoque inclusivo de la atención a la diversidad</h5>
                        </div>
                        <div class="back">
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
                            <h5 class="py-2">Enfoque intercultural</h5>
                        </div>
                        <div class="back">
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
                            <h5 class="py-2">Enfoque de igualdad de género</h5>
                        </div>
                        <div class="back">
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
                            <h5 class="py-2">Enfoque ambiental</h5>
                        </div>
                        <div class="back">
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
                            <h5 class="py-2">Enfoque orientación al bien común</h5>
                        </div>
                        <div class="back">
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg p-0 ">
                <div class="flip mx-1">
                    <div class="card shadow ">
                        <div class="front ">
                            <span class="fs-1"><img src="./public/img/icons/excelenciaaa.png" width="50" alt=""></span>
                            <h5 class="py-2">Enfoque búsqueda de la excelencia</h5>
                        </div>
                        <div class="back">
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <br>
    <br>

    <div class="container">
        <br>
        <br>
        <br>
        <h3 style="color:var(--color3);">Herramientas </h3>
        <div class="separador mx-start"></div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-5">
            </div>
            <div class="col-lg-7">
                <ul class="nav nav-pills mb-4 flex-column flex-sm-row shadow-sm bg-light" id="pills-tab" role="tablist">
                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 active py-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>Cubicol</b></button>
                    </li>
                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="true"><b>Google Meet</b></button>
                    </li>

                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Otras Aplicaciones </b></button>
                    </li>

                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Biblioteca</b></button>
                    </li>
                </ul>
            </div>


            <div class="tab-content " id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-85px;">
                            <video src="./public/videos/VIDEO_CUBICOL.mp4" width="100%" autoplay="" muted="" loop=""></video>
                        </div>
                        <div class="col-lg-7">
                            <p><strong>¡Padres siempre comunicados gracias a la notificación virtual inmediata de atención!</strong></p>

                            <p>
                                A través de nuestra plataforma Cubicol, todos los padres de
                                familia son informados inmediatamente después de cualquier
                                atención realizada a sus hijos en nuestro servicio de Enfermería.
                                De esta manera, ellos pueden conocer el tipo de atención realizada,
                                motivo y recomendaciones a tener en cuenta, Reduce tiempos al publicar y
                                gestionar información relevante. Y gestiona la publicación fácil y
                                rápida de tareas, agendas, noticias, notas, mensajes y mucho más.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-85px;">
                            <img src="./public/img/img-page/meet.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                Es una aplicación de software para videoconferencias, propiedad de Google. Permite interactuar con los estudiantes en tiempo real, vía virtual.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-85px;">
                            <img src="./public/img/img-page/otrasapp.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                De acuerdo a la naturaleza de cada curso, acorde al grado
                                de instrucción de los estudiantes, y dentro del escenario
                                previsto para la gestión de Educación a Distancia por nuestra
                                Institución, los Docentes pueden emplear otras plataformas y/o
                                aplicaciones, además de las mencionadas, para mejorar la experiencia
                                de Educación a Distancia y lograr mejores resultados en la gestión de
                                aprendizajes. Es importante señalar que el uso de recursos de este tipo no
                                es una condición de trabajo, sino, como corresponde propiamente a los objetivos
                                de la Institución, un recurso con el que se cuenta para garantizar el nivel
                                apropiado del servicio educativo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-85px;">
                            <img src="./public/img/img-page/biblioteca.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                Nuestra Institución maneja un Banco de Libros,
                                con material destinado al apoyo del Plan Lector.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>

<?php include_once  './partials/footer2.php'; ?>


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
                        setTimeout(actualizar_contador, 50)
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