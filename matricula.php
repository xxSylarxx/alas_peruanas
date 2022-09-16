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
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 120%; */
            padding: 6rem;

        }



        #bienvenidos-parrafo p,
        h2 {

            color: black;
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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
                url('./public/img/img-page/arequipa/fachadaf.jpg');
            /* background:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); */
            background-size: 100%;
            /* background-position: center; */
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



        @media screen and (max-width:410px) {}

        @media screen and (max-width:1200px) {}
    </style>

    <section id="portada">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="ml6">
                        <span class="text-wrapper">
                            <span class="letters" style="font-size:50px;">Proceso de Matrícula</span>
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
    <section class="container">
        <div class="row py-5">
            <div class="col-lg-12">
                <!--   <center><img src="./public/img/icons/logo.png" style="height:100px;" alt=""></center> -->
                <br>
                <h2 style="text-align:center;color:var(--color1);">Bienvenidos a formar parte de nuestra familia</h2>
                <!-- <div class="separador mx-auto"></div> -->
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>1. PROCESO DE MATRÍCULA </h4>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush1">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">1.1. REQUISITOS PARA EL INGRESO DE NUEVOS ESTUDIANTES</div>
                                        </button>
                                    </h2>
                                    <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <p>La institución educativa no realiza ningún examen de ingreso.
                                                        Es de voluntad propia el de matricularse en la institución.</p>
                                                    <ul>
                                                        <li>Al momento que el padre/madre/apoderado lo solicite se le emitirá la constancia de vacante, esta podrá ser entregada en forma física o enviada a su correo electrónico, para que pueda realizar los trámites de traslado del colegio de procedencia.</li>
                                                        <li>Actualizar datos en la plataforma del colegio (CUBICOL) y firmar los documentos que se encontrarán en la plataforma del colegio.</li>
                                                    </ul>
                                                    <p>Para poder realizar la matrícula se debe presentar lo siguiente:</p>
                                                    <ul>
                                                        <li>Voucher de pago del monto de la matricula.</li>
                                                        <li>Copia del DNI (actualizado) del alumno y de los padres de familia o apoderado.</li>
                                                        <li>Copia de la cartilla de vacunación (solo nivel inicial).</li>
                                                        <li>RD de traslado.</li>
                                                        <li>Ficha única de matricula.</li>
                                                        <li>Constancia de no adeudo.</li>
                                                        <li>Certificado de Estudios (menos alumnos que ingresan tres años).</li>
                                                    </ul>
                                                    <p>Llenar la información en la plataforma del colegio para lo cual se le dará su usuario y contraseña. Llenar los documentos de matrícula, firmarlos y enviarlos por la misma plataforma.</p>
                                                    <p>El tiempo para matricular a los alumnos nuevos es hasta contar con vacantes para el grado que postula.</p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush2">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">1.2 REMATRICULA</div>
                                        </button>
                                    </h2>
                                    <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <p>Para los alumnos del colegio para realizar la rematricula se debe realizar lo siguiente:</p>
                                                    <ul>
                                                        <li>Requisito importante es no tener deudas del año 2022 o anteriores.</li>
                                                        <li>Pago del monto de la matrícula.</li>
                                                        <li>Regularizar documentos que falten presentar.</li>
                                                        <li>Actualizar datos en el sistema y presentar los documentos firmados que podrán ser descargados de la plataforma de CUBICOL, luego los podrán subir por la misma plataforma.</li>
                                                    </ul>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush3">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">1.3 DOCUMENTOS PARA PRESENTAR ALUMNOS NUEVOS O REMATRICULA</div>
                                        </button>
                                    </h2>
                                    <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <p>En la plataforma del colegio CUBICOL se colocarán los documentos que los padres/madres/apoderados deberán descargar y firmar y subirlos a la plataforma, si no se realiza este procedimiento la matrícula no estará completa.</p>
                                                    <p>Documentos para presentar firmados:</p>
                                                    <ul>
                                                        <li>Ficha de matrícula según formato.</li>
                                                        <li>Contrato de prestación de servicios educativos 2023.</li>
                                                        <li>Compromiso de padres.</li>
                                                        <li>Declaración de jurada.</li>
                                                        <li>Autorización para el tratamiento de datos.</li>
                                                        <li>Carta de autorización para ser grabado.</li>
                                                        <li>Solicitud de matrícula.</li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush4">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">1.4 EN EL CASO DE APODERADO</div>
                                        </button>
                                    </h2>
                                    <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <p>En el caso que los padres dejen a
                                                        otra persona como apoderado, este deberá
                                                        presentar la carta poder que firmada por
                                                        de los padres de familia indicando que es el
                                                        apoderado y el representante económico.</p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush5">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">1.5 DE LA EXONERACIÓN DE EDUCACIÓN RELIGIOSA</div>
                                        </button>
                                    </h2>
                                    <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <p>Para solicitar la exoneración
                                                        del curso de educación religiosa
                                                        se deberá presentar los siguientes
                                                        documentos al momento de la matrícula:</p>
                                                    <ul>
                                                        <li>Solicitud de exoneración</li>
                                                        <li>Carta de la iglesia correspondiente.</li>
                                                    </ul>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Para mayor información, puedes comunicarte con la, responsable de Admisión, al correo
                        <a href="mailto:admision-alasperuanas_aqp@iepap.edu.pe" style="color:var(--color1);font-weight:bold;" target="_blank">admision-alasperuanas_aqp@iepap.edu.pe</a>
                    </p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div>
                        <img src="./public/img/img-page/arequipa/foto_inicial.jpg" width="85%" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br>
    <br>
    <section>

        <div class="container">
            <h2 style="color:var(--color1);">DEL MONTO DE LA MATRICULA Y PENSIONES</h2>
            <div class="row">
                <div class="col-lg-12 my-auto">


                    <div class="mt-5 tableover">
                        <table class="table table-bordered">
                            <thead class="text-white" style="background-color:var(--color1);">
                                <tr style="text-align:center;">
                                    <td>NIVEL</td>
                                    <td>CUOTA DE INGRESO</td>
                                    <td>MATRICULA</td>
                                    <td>PENSIONES</td>
                                    <td>N° CUOTAS PENSIÓN</td>

                                </tr>
                            </thead>
                            <tbody>

                                <tr style="text-align:center;background-color:white;">
                                    <td>INICIAL</td>
                                    <td>EXONERADA</td>
                                    <td>S/ 300.00</td>
                                    <td>S/ 300.00</td>
                                    <td>10</td>
                                </tr>

                                <tr style="text-align:center;background-color:white;">
                                    <td>PRIMARIA</td>
                                    <td>EXONERADA</td>
                                    <td>S/ 360.00</td>
                                    <td>S/ 360.00</td>
                                    <td>10</td>
                                </tr>

                                <tr style="text-align:center;background-color:white;">
                                    <td>SECUNDARIA</td>
                                    <td>EXONERADA</td>
                                    <td>S/ 380.00</td>
                                    <td>S/ 380.00</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            La institución educativa no cobra cuotas de ingreso en ninguno de sus niveles.
            <span style="color:var(--color1);font-weight:bold;">Los montos establecidos para las pensiones escolares 2023 podrían sufrir un incremento en función
                a distintos factores que afectan los costos de financiamiento de la institución como la inflación
                y/o aumento de precios de los bienes y servicios en el país,</span>
            los postulantes a 3 años, deben tener tres años cumplidos al 31 de marzo de 2023.

        </div>
    </section>
    <br>
    <br>
    <section>

        <div class="container">
            <h2 style="color:var(--color1);">JORNADA ESCOLAR</h2>
            <br>
            <p>La jornada escolar es de lunes a viernes y se establece en aula de la siguiente manera:</p>
            <!--  <p>Horarios en etapa presencial:
            </p> -->
            <div class="row">
                <div class="col-lg-12 my-auto">


                    <div class="mt-5 tableover">
                        <table class="table table-bordered">
                            <thead class="text-white" style="background-color:var(--color1);">
                                <tr style="text-align:center;">
                                    <td>NIVEL</td>
                                    <td>HORARIO REGULAR</td>
                                    <td>HORAS PEDAGÓGICAS</td>


                                </tr>
                            </thead>
                            <tbody>

                                <tr style="text-align:center;background-color:white;">
                                    <td>INICIAL</td>
                                    <td>De 8:15 a 13:45 horas</td>
                                    <td>6 horas pedagógicas</td>

                                </tr>

                                <tr style="text-align:center;background-color:white;">
                                    <td>PRIMARIA</td>
                                    <td>De 7:45 a 14:10 horas</td>
                                    <td>7 horas pedagógicas</td>

                                </tr>

                                <tr style="text-align:center;background-color:white;">
                                    <td>SECUNDARIA</td>
                                    <td>De 7:45 a 15:00 horas</td>
                                    <td>8 horas pedagógicas</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--    <div class="container">
        <div class="row">
            <div class="col-lg-5">
            </div>
            <div class="col-lg-7">
                <ul class="nav nav-pills mb-4 flex-column flex-sm-row shadow-sm bg-light" id="pills-tab" role="tablist">
                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 active py-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>Vía Crucis</b></button>
                    </li>
                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="true"><b>Día de la Madre</b></button>
                    </li>

                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Día del Padre </b></button>
                    </li>

                    <li class="nav-item flex-sm-fill" role="presentation">
                        <button class="nav-link w-100 py-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Día del colegio</b></button>
                    </li>
                </ul>
            </div>


            <div class="tab-content pt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-105px;">
                            <img src="./public/img/img-page/arequipa/diadelpadre.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                El Vía Crucis es una tradición en nuestro Colegio que se
                                desarrolla desde hace más de veinte años como parte del
                                itinerario formativo. Esta actividad convoca e involucra a
                                toda la Comunidad Educativa Alas Peruanas y nos prepara para
                                vivir una Semana Santa de reflexión.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-105px;">
                            <img src="./public/img/img-page/arequipa/diadelpadre.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                Uno de los eventos con mayor connotación en el Colegio que
                                cuenta con la asistencia de todas las mamás de los
                                diferentes niveles, que aprecian distintas presentaciones
                                artístico-musicales preparadas por sus hijos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-105px;">
                            <img src="./public/img/img-page/arequipa/diadelpadre.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                Una tradicional celebración que muestra la integración de nuestra Comunidad, 
                                el trabajo en equipo y la creatividad de nuestros alumnos y padres través de 
                                gincanas en equipo. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row ">
                        <div class="col-lg-5" style="position:relative;margin-top:-105px;">
                            <img src="./public/img/img-page/arequipa/diadelpadre.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>
                                Cada 23 de setiembre celebramos el aniversario de nuestro 
                                Colegio Alas Peruanas. Un día en el que toda la Comunidad 
                                celebra el Día del Colegio en una especial ceremonia y 
                                espectáculo artístico, para luego disfrutar de Nuestra Fiesta Familiar 
                                es el evento donde contamos con la mayor participación de los miembros 
                                de la Comunidad Alas Peruanas, incluyendo familiares y público arequipeño. 
                                Un día donde la comunidad disfruta de buena música, comida, presentaciones 
                                artísticas, nuestra tradicional, Bingo, y  la infaltable Tómbola.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <br><br>
    </section>
    <br>
    <br>
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