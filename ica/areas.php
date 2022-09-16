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
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 120%;
            padding: 6rem;

        }

        #bienvenidos-parrafo2 {
            background: linear-gradient(rgba(0, 0, 0, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 120%;
            padding: 6rem;

        }

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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),
                url('./public/img/img-page/ica/portada_areas.jpg');
            /* background:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); */
            background-size: 100%;
            /* background-position: center; */
            background-attachment: fixed;
            margin-top: -7rem;

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

        /*   #bienvenidos-interno2 {
           background-color: var(--color1);

        } */
        #bienvenidos-interno2 h2 {
            color: var(--color1);
            text-align: start;

        }





        @media screen and (max-width:410px) {}

        @media screen and (max-width:1300px) {}
    </style>

    <section id="portada">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="ml6">
                        <span class="text-wrapper">
                            <span class="letters" style="font-size:50px;">Áreas
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
    <section id="bienvenidos-interno">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 mt-4 mb-4">
                    <h2 style="text-align:start;color:var(--color1);">Arte</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>Busca contribuir significativamente en el desarrollo integral de
                        los estudiantes, promoviendo en ellos el descubrimiento y
                        la utilización de su potencial desde una óptica humanista;
                        además de fomentar sus habilidades expresivas y perceptivas,
                        así como también la apreciación del valor del arte en toda su
                        diversidad acercándose a las producciones estético-artísticas de
                        nuestro entorno como de otros entornos y épocas lo que implica
                        autoconocimiento, conocimiento de los demás y diálogo intercultural.</p>
                    <p>Durante el transcurso del año se desarrollan las siguientes especialidades:</p>
                    <ul>
                        <li>Música</li>
                        <li>Danza</li>
                        <li>Teatro</li>
                    </ul>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush1">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS</div>
                                        </button>
                                    </h2>
                                    <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>APRECIA DE MANERA CRÍTICA MANIFESTACIONES ARTÍSTICOS CULTURALES</h5>
                                                    <p>Esta competencia se define
                                                        como la interacción entre el estudiante
                                                        y las manifestaciones artístico-culturales,
                                                        para que puedan observarlas o escucharlas
                                                        detenidamente, investigarlas, comprenderlas y
                                                        reflexionar sobre ellas. Además, permite al estudiante
                                                        desarrollar habilidades para percibir, describir y analizar
                                                        sus cualidades estéticas, lo que permite que las pueda apreciar y
                                                        entenderlas. Supone comprender y valorar los contextos específicos
                                                        en que se originan estas manifestaciones, e implica emitir juicios de
                                                        valor cada vez más informados, basándose en los conocimientos obtenidos
                                                        en este proceso. </p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>CREA PROYECTOS DESDE LOS LENGUAJES ARTÍSTICOS</h5>
                                                    <p>Esta competencia implica que el estudiante use los diversos
                                                        lenguajes artísticos (artes visuales, música, danza, teatro,
                                                        artes audiovisuales, interdisciplinares y otros) para expresar
                                                        o comunicar mensajes, ideas y sentimientos. Pone en práctica
                                                        habilidades imaginativas, creativas y reflexivas para generar
                                                        ideas, planificar, concretar propuestas y evaluarlas de manera
                                                        continua para lo cual hace uso de recursos y conocimientos que
                                                        ha desarrollado en su interacción con el entorno, con las
                                                        manifestaciones artístico-culturales diversas y con los diversos
                                                        lenguajes artísticos. Además, experimenta, investiga y aplica los
                                                        diferentes materiales, técnicas y elementos del arte con una intención
                                                        específica. Asimismo, reflexiona sobre sus procesos y creaciones y
                                                        los comunica a otros, con el fin de seguir desarrollando sus capacidades
                                                        críticas y creativas. </p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/arte.jpg" width="98%" alt=""></center>
                </div>

            </div>
        </div>

    </section>
    <section id="bienvenidos-interno2">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/computacion.jpg" width="90%" alt=""></center>
                </div>
                <div class="col-lg-6 my-auto ">
                    <h2>Computación</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>El área de Informática tiene como finalidad desarrollar las potencialidades intelectuales del alumno como:</p>
                    <ul>
                        <li>La Creatividad</li>
                        <li>La Imaginación</li>
                        <li>Pensamiento Divergente</li>
                        <li>Lógico Matemático</li>
                    </ul>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush3">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS</div>
                                        </button>
                                    </h2>
                                    <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>GESTIONA PROYECTO DE EMPRENDIMIENTO ECONÓMICO Y SOCIAL</h5>
                                                    <p>Es cuando el estudiante lleva a la acción una idea creativa
                                                        movilizando con eficiencia y eficacia los recursos, tareas,
                                                        herramientas, métodos y técnicas necesarias para alcanzar
                                                        objetivos y metas individuales y colectivas en atención de
                                                        resolver una necesidad no satisfecha o un problema económico
                                                        o social.</p>
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
        </div>

    </section>
    <section id="bienvenidos-interno">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 my-auto">
                    <h2 style="text-align:start;color:var(--color1);">Comunicación</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>Formar alumnos líderes, con capacidad crítico-reflexiva con habilidades comunicativas y socializadoras; que sepan dialogar y fundamentar.</p>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush4">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS</div>
                                        </button>
                                    </h2>
                                    <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>SE COMUNICA ORALMENTE EN SU LENGUA MATERNA</h5>
                                                    <p>Se comunica oralmente mediante diversos tipos de texto;
                                                        infiere el tema propósito, hechos y conclusiones a partir
                                                        de información explícita e implícita, e interpreta la
                                                        intervención del interlocutor en discursos que contienen
                                                        ironías y sesgos. Organiza y desarrolla sus ideas en torno
                                                        a un tema y las relaciona mediante el uso de diversos conectores.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>LEE DIVERSOS TIPOS DE TEXTO ESCRITOS EN LENGUA MATERNA</h5>
                                                    <p>Esta competencia se define como una interacción
                                                        dinámica entre el lector, el texto y los contextos
                                                        socioculturales que enmarca la lectura. Cuando el estudiante
                                                        pone en juego esta competencia utiliza saberes de distinto tipo y
                                                        recursos provenientes de su experiencia lectora y del mundo que lo rodea.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>ESCRIBE DIVERSOS TIPOS DE TEXTOS EN LENGUA MATERNA</h5>
                                                    <p>Esta competencia se define como el uso del lenguaje escrito
                                                        para construir sentidos en el texto y comunicarlos a otros.
                                                        En esta competencia el estudiante pone en juego saberes de
                                                        distinto tipo y recursos provenientes de su experiencia con
                                                        el lenguaje escrito y el mundo que lo rodea.</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/ica_comunicacion.jpg" width="90%" alt=""></center>
                </div>

            </div>
            <div class="row">
                <div class="conteiner">


                </div>
            </div>
        </div>

    </section>
    <section id="bienvenidos-interno2">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/ciencia.jpg" width="95%" alt=""></center>
                </div>
                <div class="col-lg-6 my-auto">
                    <h2 style="text-align:start;color:var(--color1);">Ciencia y Tecnología</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>El área de Ciencia y Tecnología tiene como finalidad
                        desarrollar integralmente al alumno, desde su relación
                        con la naturaleza, de la cual forma parte, con la tecnología
                        y con su ambiente en el marco de una cultura científica.</p>
                    <p>Que el estudiante desarrolle un pensamiento científico
                        que le permita contar con una teoría del mundo natural
                        dentro del contexto de un proceso humano integral, equitativo
                        y sostenible que le proporcione una concepción de sí mismo y
                        de sus relaciones con la sociedad y la naturaleza armónica con
                        la preservación de la vida en el planeta.</p>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush7">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item7" aria-expanded="false" aria-controls="item7">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS</div>
                                        </button>
                                    </h2>
                                    <div id="item7" class="accordion-collapse collapse" aria-labelledby="flush7" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>INDAGA MEDIANTE MÉTODOS CIENTÍFICOS PARA CONSTRUIR CONOCIMENTOS</h5>
                                                    <p>El estudiante es capaz de construir su conocimiento acerca del funcionamiento y
                                                        estructura del mundo natural y artificial que lo rodea, a través de procedimientos
                                                        propios de la ciencia, reflexionando acerca de lo que sabe y de como a llegado a saberlo.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>EXPLICA EL MUNDO FÍSICO BASÁNDOSE EN CONOCIMIENTOS SOBRE LOS SERES VIVOS, MATERIA Y ENERGÍA, BIODIVERSIDAD, TIERRA Y UNIVERSO</h5>
                                                    <p>El estudiante es capaz de comprender conocimientos científicos
                                                        relacionados a hechos o fenómenos naturales, sus causas y relaciones
                                                        con otros fenómenos.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>DISEÑA Y CONSTRUYE SOLUCIONES TECNOLÓGICAS PARA RESOLVER PROBLEMAS DE SU ENTORNO</h5>
                                                    <p>El estudiante es capaz de construir objetos, procesos o sistemas tecnológicos, basándose en conocimientos científicos, tecnológicos y de diversas prácticas locales, para dar respuesta a problemas del contexto.</p>
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
        </div>

    </section>
    <section id="bienvenidos-interno">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 my-auto">
                    <h2 style="text-align:start;color:var(--color1);">Matemática</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>Desarrollar en los estudiantes el pensamiento matemático y el razonamiento lógico para formar personas inteligentes, creativas en la resolución de problemas y con actitudes positivas ante la vida.</p>
                    <p>La Matemática es una actividad humana y ocupa un lugar
                        relevante en el desarrollo del conocimiento y de la
                        cultura de nuestras sociedades. El aprendizaje de
                        la matemática contribuye a formar ciudadanos capaces
                        de buscar, organizar, sistematizar y analizar información
                        para entender e interpretar el mundo que los rodea,
                        desenvolverse en él, tomar decisiones pertinentes y
                        resolver problemas en distintas situaciones.</p>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush10">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item10" aria-expanded="false" aria-controls="item10">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS</div>
                                        </button>
                                    </h2>
                                    <div id="item10" class="accordion-collapse collapse" aria-labelledby="flush10" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>RESUELVE PROBLEMAS DE CANTIDAD</h5>
                                                    <p>Consiste en que el estudiante solucione problemas o plantee nuevos problemas que le demanden construir y comprender, las nociones de cantidad, de número, de sistemas numéricos, sus operaciones y propiedades.</p>
                                                    <p>El razonamiento matemático es usado cuando el estudiante hace comparaciones, explica a través de analogías en el proceso de resolución de un problema.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>RESUELVE PROBLEMAS DE REGULARIDAD, EQUIVALENCIA Y CAMBIO</h5>
                                                    <p>Consiste en que el estudiante logre caracterizar equivalencias y
                                                        generalizar regularidades y el cambio de una magnitud con respecto
                                                        a otra, a través, de reglas generales que le permitan encontrar
                                                        valores desconocidos, determinar restricciones y hacer predicciones
                                                        sobre el comportamiento de un fenómeno.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>RESUELVE PROBLEMAS DE FORMA, MOVIMIENTO Y LOCALIZACIÓN</h5>
                                                    <p>Consiste en que el estudiante se oriente y describa
                                                        la posición y el movimiento de objetos y de sí mismo en
                                                        el espacio, visualizando, interpretando y relacionando
                                                        las características de los objetos.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>RESUELVE PROBLEMAS DE GESTIÓN DE DATOS E INCERTIDUMBRE</h5>
                                                    <p>Consiste en que el estudiante analice
                                                        datos sobre un tema de interés o estudio o de
                                                        situaciones aleatorias, que le permitan tomar
                                                        decisiones, elaborar predicciones razonables y
                                                        conclusiones respaldadas en la información producida.</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/portada_secundaria.jpg" width="90%" alt=""></center>
                </div>

            </div>

        </div>

    </section>
    <section id="bienvenidos-interno2">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 mt-4 mb-4">
                    <center><img src="./public/img/img-page/ica/ica_ingles.jpg" width="87%" alt=""></center>
                </div>
                <div class="col-lg-6 my-auto">
                    <h2 style="text-align:start;color:var(--color1);">Inglés</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>El área de inglés tiene como propósito que los alumnos se expresen en forma oral y escrita en una lengua extranjera “ingles”, permitiéndoles así desenvolverse en situaciones básicas de comunicación.</p>
                    <p>El objetivo del área es que los estudiantes obtengan
                        los conocimientos necesarios para participar en
                        prácticas sociales del lenguaje de manera oral y
                        escrita, con hablantes nativos y no nativos del inglés,
                        a través de actividades que conllevan la producción e
                        interpretación de diversos textos escritos y orales de
                        naturaleza cotidiana, académica y literaria.</p>
                    <div class="row d-flex ">
                        <div id="acordiondesafios" class="col-lg">
                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="flush14">
                                        <button class="accordion-button collapsed bg-body " type="button" data-bs-toggle="collapse" data-bs-target="#item14" aria-expanded="false" aria-controls="item14">
                                            <div class="boton-icono"><i class="fas fa-caret-right"></i></div>
                                            <div class="w-100 title-pe mx-3">COMPETENCIAS </div>
                                        </button>
                                    </h2>
                                    <div id="item14" class="accordion-collapse collapse" aria-labelledby="flush14" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>SE COMUNICA ORALMENTE EN INGLÉS COMO LENGUA EXTRANJERA</h5>
                                                    <p>Se define como una interacción dinámica entre uno o más interlocutores para comunicar sus ideas y sus emociones. Esta competencia implica el uso adecuado de diferentes estrategias conversacionales considerando los modos de cortesía de acuerdo al contexto sociocultural.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>LEE DIVERSOS TIPOS DE TEXTO EN INGLES COMO LENGUA EXTRANJERA</h5>
                                                    <p>Se define como una interacción dinámica entre el lector, el texto y los contextos socioculturales que enmarcan la lectura. Implica que el estudiante sea consciente que la lectura de textos cumple propósitos específicos, como disfrutar, resolver un problema o una duda.</p>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span>
                                                    <h5>ESCRIBE DIVERSOS TIPOS DE TEXTO EN INGLES COMO LENGUA EXTRANJERA</h5>
                                                    <p>Se define como el uso del lenguaje escrito para construir sentidos en el texto y comunicarlos a otros. El estudiante pone saberes de distintos tipos y recursos provenientes de su experiencia con el lenguaje escrito y del mundo que lo rodea.</p>
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
        </div>

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