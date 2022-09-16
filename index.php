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
    <!-- animaciones letras -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id='cuerpo'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");

            header.classList.toggle("fixed-top", window.scrollY > 130);


        });
        setTimeout(() => {

            let loader = document.getElementById('preload');

            loader.style.opacity = '0';

            setTimeout(() => {

                loader.style.display = 'none';

            }, 500);

        }, 1900);
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

        /* #slider .carousel-control-next-icon {
            background-image: none;
        } */

        #slider .carousel-control-prev-icon i,
        #slider .carousel-control-next-icon i {
            color: #7E1113;
            font-size: 2rem;
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

        #historia {
            background: linear-gradient(rgba(0, 0, 0, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/arequipa/fachada1.jpg');
            background-size: 100%;
            padding: 2rem;

        }


        .main_div {

            position: relative;
            z-index: 1;
            width: 15rem;
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
            border-top: 3px solid var(--color2);
            border-left: 3px solid var(--color2);
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
            border-right: 3px solid var(--color2);
            border-bottom: 3px solid var(--color2);
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
            background-color: var(--color9);
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
            background: black;
        }

        #lema {
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/img-page/fachadaf.jpg');
            background-size: 120%;
            /* background-position: center; */
            background-attachment: fixed;
            background-repeat: no-repeat;


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
            transition: transform .6s;
        }

        #lema h3:hover {
            transform: scale(1.10);
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

        .redesS {
            /*  border-top: 1px solid var(--color6); */
            padding-top: 2rem;
            color: var(--color1);
            /* display: flex; */
            flex-direction: column;
            margin-top: 2rem;
            justify-content: center;
            position: absolute;
            left: 10px;
            bottom: 180px;
            z-index: 99;
        }

        .redesS a {
            font-size: 16px;
            color: var(--color1);
            border: 1px solid var(--color1);
            text-align: center;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            padding-top: 8px;
            display: inline-block;
        }

        .redesS .yt:hover {
            background: #DD4B39;
            color: var(--color4);
        }

        .redesS .fb:hover {
            background: #3B5998;
            color: var(--color4);
        }

        .redesS .tw:hover {
            background: #00ACED;
            color: var(--color4);
        }

        .redesS .ig:hover {
            background: #DF05A7;
            color: var(--color4);
        }

        /* Redes flotantes END */


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

        #importantes {
            padding-top: 8rem;
            padding-bottom: 8rem;
            color: white;
            background: linear-gradient(to top,
                    black 100%,
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

        .bgmusica {
            opacity: .08;
            filter: brightness(100%) contrast(100%) saturate(0%) blur(0) hue-rotate(0deg);
            position: absolute;
            height: 80%;
            top: 120%;
            left: -130px;
        }

        #correocontacto {
            color: var(--color3);
            font-family: 'helvetica', sans-serif;
            word-wrap: break-word;
            font-size: 16px;

        }

        .div-banner {
            padding-left: 2rem;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            margin-top: -600px;
            padding-bottom: 14rem;

        }

        .text-banner span {
            font-family: "monserratblack", sans-serif !important;
            font-weight: 900;
            font-size: 50px;
            color: var(--color1);
        }

        .text-banner p {
            font-family: "monserratsemibold", sans-serif !important;
            font-size: 1.6rem;
            color: var(--color3);
        }

        .text-banner img {
            width: 100px;
            margin-left: 30%;
            margin-bottom: 10px;
        }

        #lema-banner {
            font-size: 2.5rem;
            color: var(--color10);
            font-weight: bold;
        }

        #pilares {
            background: linear-gradient(to top,
                    rgba(136, 28, 34, 0.7) 55%,
                    #ffff 10%,
                    #ffff 50%),
                url("./public/img/img-page/fachadaf.jpg");
            background-size: 120% !important;
            padding-top: 4rem;
            padding-bottom: 1rem;
            margin-top: -10px;
            background-repeat: no-repeat;
            border-color: white !important;
        }

        #pilares .row-pad {
            height: 500px;
            margin: 0 7.5%;
        }

        #pilares h5 {
            font-size: 17px;

            font-weight: bold;

            text-transform: uppercase;
        }

        #pilares h4 {
            font-size: 18.5px;

            font-weight: bold;

            text-transform: uppercase;
        }

        #pilares .btn {
            background-color: var(--color3);
            color: var(--color2);
            padding: 0.8rem 1rem;
            font-weight: 600;
            border-radius: 0;
        }

        #carousel-noticias .carousel-item p {
            line-height: 1.5;
            font-size: 18px;

        }

        /* estilos para ultimas noticias */
        div.crop {
            width: 100%;
            height: 220px;
            max-height: 220px;
            overflow: hidden;
            border-radius: 10px;
        }

        div.crop>img {
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        div.bg-trans {
            text-align: center;
            color: white;
            position: absolute;
            border-radius: 10px;
            visibility: hidden;
            -webkit-transition: opacity 900ms, visibility 900ms;
            transition: opacity 900ms, visibility 900ms;
            opacity: 0;
        }

        div.card:hover .bg-trans {
            background: rgba(0, 0, 0, 0.7);
            cursor: pointer;
            visibility: visible;
            opacity: 1;
        }


        @media screen and (max-width:1300px) {
            .bgmusica {
                opacity: .08;
                filter: brightness(100%) contrast(100%) saturate(0%) blur(0) hue-rotate(0deg);
                position: absolute;
                height: 100%;
                top: 100%;
                left: -10px;
                z-index: -99;
            }

            .div-social {

                padding-top: 2rem;
                color: var(--color1);
                /* display: flex; */
                flex-direction: column;
                margin-top: 2rem;
                justify-content: center;
                position: absolute;
                left: 10px;
                bottom: 350px;
                z-index: 99999;

            }
        }

        @media screen and (max-width:500px) {
            .bgmusica {
                display: none;
            }

            #correocontacto {
                font-size: 12px;
            }
        }
    </style>
    <div id="preload">

        <div id="circulo">

            <div class="loadmove">

            </div>

        </div>
        <img src="./public/img/icons/logo.png" id="loadEscudo" height="78">
    </div>
  
    <div class="redesS">

        <div class="red">
            <a class="fb" href="https://www.facebook.com/Colegio-Alas-Peruanas-AQP-100289138340360/?ref=pages_you_manage" target="_blank">
                <span><i class="fab fa-facebook-f"></i></span>
            </a>
        </div>

        <div class="red">
            <a class="ig" href="https://www.instagram.com/colegio_alas_peruanas/" target="_blank">
                <span><i class="fab fa-instagram"></i></span>
            </a>
        </div>
    </div>

    <section id="slider">
        <div class="container-fluid content-banner px-0">
            <div id="carouselBanner" class="carousel slide pointer-event" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" class=""></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/img/banner/banner2_alas_peruanas.jpg" class="d-block w-100">
                        <div class="div-banner container">
                            <div class="text-banner">
                                <img src="./public/img/icons/logo.png" alt="">
                                <br>
                                <p id="lema-banner">"Educamos para la vida"</p>
                                <a href="./inicial.php"><span>NIVEL INICIAL</span></a>
                                <br>
                                <br>
                                <p>
                                    Establecemos las bases de la formación<br>
                                    de una personalidad integra y protagónica.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/banner/banner_alas_peruanas.jpg" class="d-block w-100">
                        <div class="div-banner container">
                            <div class="text-banner">
                                <img src="./public/img/icons/logo.png" alt="">
                                <br>
                                <p id="lema-banner">"Educamos para la vida"</p>
                                <a href="./primaria.php"><span>NIVEL PRIMARIA</span></a>
                                <br>
                                <br>
                                <p>Desarrollamos en nuestros estudiantes el conocimiento <br>
                                    científico,la creatividad y el trabajo en equipo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="./public/img/banner/banner3_alas_peruanas.jpg" class="d-block w-100">
                        <div class="div-banner container">
                            <div class="text-banner">
                                <img src="./public/img/icons/logo.png" alt="">
                                <br>
                                <p id="lema-banner">"Educamos para la vida"</p>
                                <a href="./secundaria.php"><span>NIVEL SECUNDARIA</span></a>
                                <br>
                                <br>
                                <p>Promovemos el desarrollo de capacidades <br> y actitudes investigativas en las diversas áreas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                </button>
                </span>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>



    <section id="bienvenidos-interno">
        <br>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 mt-4 mb-4">

                    <h1 style="text-align:start;color:var(--color3);">Bienvenidos</h1>
                    <div class="separador mx-start"></div>
                    <img class="bgmusica" src="./public/img/icons/dios.png" alt="">
                    <div class="row ">
                        <div class="col-lg">
                            <br>
                            <p>Bienvenidos a los Colegios Alas Peruanas y gracias por considerarnos como una posibilidad para la educación de sus hijos.</p>
                            <p>Nuestra Institución tiene 30 años al servicio de la educación
                                arequipeña, formando estudiantes integrales y nuestra
                                educación va de acuerdo a cada etapa de su desarrollo,
                                en diversos ámbitos de la ciencia, tecnología, arte y deporte.</p>
                            <p>Entendemos que una formación educativa de alto
                                nivel está cimentada en la adquisición
                                de habilidades y conocimientos para instruir
                                ciudadanos capaces de integrarse a la sociedad.</p>
                            <p>Aspiramos a brindar un servicio educativo con excelencia,
                                sólido en valores, desarrollando en los estudiantes competencias
                                que promuevan la investigación, la innovación y el cuidado del
                                medio ambiente.</p>
                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="main_div">
                                    <a href="./historia.php"><button>Conoce Nuestra Historia</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mb-4">
                    <center><img src="./public/img/img-page/coordinador_academico.jpg" width="80%" class="img-fluid" alt=""></center>
                </div>
            </div>
        </div>

    </section>

    <section class="container-fluid" id="pilares">

        <div class="container">

            <div class="row">

                <div class="col-lg ">
                    <div style="text-align:center;">
                        <h2>Nuestros Valores</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>

            </div>

            <br><br>

            <div id="carousel-noticias" class="carousel slide pointer-event" data-bs-ride="carousel" data-bs-interval="false">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <center><img src="./public/img/icons/libertad.png" height="60px;" width="60px" alt=""></center>
                                    <br>
                                    <h3 style="color: var(--color1);display:flex;justify-content:center;" class="mb-3">Libertad</h3>
                                    <p>
                                        A través de una sólida política para el desarrollo de las dos lenguas: inglés y
                                        español, de inicial a secundaria, nuestros estudiantes adquieren las
                                        habilidades y conocimientos necesarios para desenvolverse en ambos idiomas
                                        de manera fluida.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 p-0">
                                <img src="./public/img/img-page/inicialf2.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">


                            </div>

                        </div>

                        <br>

                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <center><img src="./public/img/icons/solidaridad.png" height="60px;" width="60px" alt=""></center>
                                    <br>
                                    <h3 style="color: var(--color1);display:flex;justify-content:center;" class="mb-3">Solidaridad</h3>
                                    <p>
                                        Es un valor que se caracteriza por la colaboración entre los
                                        alumnos y alumnas de forma desinteresada, es decir, sin esperar
                                        nada a cambio y sin ningún interés de por medio. Una persona
                                        solidaria es aquella brinda apoyo a otra solo por empatía, al
                                        reconocer que el otro tiene una necesidad que en esos momentos
                                        no puede cubrir.

                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 p-0">
                                <img src="./public/img/img-page/inicialf2.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">


                            </div>

                        </div>

                        <br>

                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <center><img src="./public/img/icons/responsabilidad.png" height="60px;" width="60px" alt=""></center>
                                    <br>
                                    <h3 style="color: var(--color1);display:flex;justify-content:center;" class="mb-3">Responsabilidad</h3>
                                    <p>
                                        Capacidad del ser humano de conocer y aceptar las consecuencias
                                        de sus actos y decisiones desde su libertad cumpliendo una labor
                                        o tarea de la mejor forma posible.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 p-0">
                                <img src="./public/img/img-page/inicialf2.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">


                            </div>

                        </div>

                        <br>

                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <center><img src="./public/img/icons/respeto.png" height="60px;" width="60px" alt=""></center>
                                    <br>
                                    <h3 style="color: var(--color1);display:flex;justify-content:center;" class="mb-3">Respeto</h3>
                                    <p>
                                        Respeto, es la aceptación y aprecio de sí mismo,
                                        de los demás y el entorno que se establece en una
                                        relación de equidad y justicia generando una convivencia
                                        pacífica.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 p-0">
                                <img src="./public/img/img-page/inicialf2.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">


                            </div>

                        </div>

                        <br>

                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <center><img src="./public/img/icons/honestidad.png" height="60px;" width="60px" alt=""></center>
                                    <br>
                                    <h3 style="color: var(--color1);display:flex;justify-content:center;" class="mb-3">Honestidad</h3>
                                    <p>
                                        Es la virtud que caracteriza a las personas por el respeto a las buenas costumbres, a los principios morales y a los bienes ajenos. Este valor es de suma importancia para mantener una buena convivencia.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 p-0">
                                <img src="./public/img/img-page/inicialf2.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">


                            </div>

                        </div>

                        <br>

                    </div>



                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-noticias" data-bs-slide="prev" style="margin-left: -40px;">

                    <span style="color: black; font-size: 2em;">

                        <i class="fas fa-chevron-left"></i>

                    </span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel-noticias" data-bs-slide="next" style="margin-right: -40px;">

                    <span style="color: black; font-size: 2em;">

                        <i class="fas fa-chevron-right"></i>

                    </span>

                </button>

            </div>

        </div>

        <!--  <p style="text-align:center;font-size:35px;font-weight:bold;color:white;">¿Por qué confiar en Davy College?</p> -->

    </section>

    <section id="propuesta">
        <div class="container">
            <h3 style="color:var(--color1);">PROPUESTA EDUCATIVA</h3>
        </div>
        <br>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/portada_inicial.jpg" alt="inicial">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="#" class="card-title">PROPUESTA PEDAGÓGICA</a>
                            <div class="line"></div>
                            <br>
                            <p class="">El enfoque adoptado por la institución educativa está en coherencia
                                al modelo de persona y sociedad en el marco del perfil de egreso
                                del actual currículo nacional de educación básica y basado en
                                nuestro Proyecto Educativo Institucional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/portada_primaria.jpg" alt="primaria">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="./primaria.php" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="#" class="card-title text-center">TALLERES</a>
                            <div class="line"></div>
                            <br>
                            <p>Los enfoques transversales se traducen en formas específicas de actuar que buscan generar una buena convivencia, por lo tanto, son deseables para todos. Son valores y actitudes, que tanto estudiantes como docentes y autoridades deben esforzarse por demostrar en la dinámica diaria de la I.E.</p>
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
                            <a href="#" class="card-title">SERVICIOS</a>
                            <div class="line"></div>
                            <br>
                            <p>Los medios tecnológicos empleados en los diferentes servicios educativos son los siguientes:
                                Plataforma Cubicol, Google Meet, etc.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br> <br> <br>

    <section id="importantes">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row d-flex">
                        <div class="col-lg-3 ">
                            <img src="./public/img/icons/colegio2.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-3 ">
                            <div class="contador_cantidad text-center" data-cantidad-total="30">0</div>
                            <div>
                                <p id="contadorparrafo">años</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row d-flex">
                        <div class="col-lg-3 ">
                            <img src="./public/img/icons/profesor.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-2 ">
                            <div class="contador_cantidad text-center" data-cantidad-total="30">0</div>
                            <div>
                                <p id="contadorparrafo">docentes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row d-flex">
                        <div class="col-lg-3 ">
                            <img src="./public/img/icons/escritorios.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-3">
                            <div class="contador_cantidad text-center" data-cantidad-total="261">0</div>
                            <div>
                                <p id="contadorparrafo">estudiantes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./public/img/icons/terreno.png" alt="" height="60"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contador_cantidad text-center" data-cantidad-total="2135">1900</div>
                            <div>
                                <p id="contadorparrafo">m² área</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lema">
        <div class="container">
            <h2>"ECUCAMOS PARA LA VIDA"</h2>
            <em>Formando líderes con pensamiento crítico y creativo</em>
            <br>
            <h3 class="title"> <a href="admision.php" style="color: var(--color5);">ADMISIÓN 2023 </a> </h3>
        </div>
    </section>

    <br> <br> <br>

    <section class="" id="noticiasprincipal">
        <div class="container">
            <h3>ÚLTIMAS NOTICIAS</h3>
            <br>
            <br>

            <div class="row d-flex justify-content-around">
                <div class="col-md-5 my-auto">
                    <a href="./arequipa/noticias.php" target="_blank">
                        <div class="card border-0" id="card-1">
                            <div class="crop">
                                <img src="./public/img/img-page/fachadaf.jpg" class="w-100">
                            </div>
                            <div class="w-100 h-100 bg-trans px-4">
                                <br><br><br>
                                <h2>Sede Arequipa</h2>
                                <!-- <p class="font-weight-bold text-center">Dibujo y pintura</p> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 my-auto">
                    <a href="./ica/noticias.php" target="_blank">
                        <div class="card border-0" id="card-1">
                            <div class="crop">
                                <img src="./public/img/img-page/fachadaf.jpg" class="w-100">
                            </div>
                            <div class="w-100 h-100 bg-trans px-4">
                                <br><br><br>
                                <h2>Sede Ica</h2>
                                <!-- <p class="font-weight-bold text-center">Dibujo y pintura</p> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br> <br> <br>

</body>
<?php include_once  './partials/footer2.php'; ?>


<!-- Script para carousel automatico -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
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
    });
</script>


<script>
    AOS.init();
</script>

</html>