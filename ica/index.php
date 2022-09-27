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
                url('./public/img/img-page/ica/fachada2_ica.jpg');
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

        /* Redes flotantes start */
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
            z-index: 99999;
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
            font-size: 2rem;
            color: var(--color10);
            font-weight: bold;
        }

        /* scroll para llamar a una seccion con altura */
        section[id] {
            scroll-margin-top: 260px;
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
            bottom: 130px;
            z-index: 99999;
        }
        }

        @media screen and (max-width:900px) {

            .bgmusica {
                display: none;
            }

            #correocontacto {
                font-size: 12px;
            }

            .div-banner {
                padding-left: 1rem;
                display: flex;
                justify-content: start;
                align-items: flex-end;
                height: 100%;
                margin-top: -300px;
                padding-bottom: 3rem;
                display: none;

            }

            .text-banner span {
                font-family: "monserratblack", sans-serif !important;
                font-weight: 900;
                font-size: 30px;
                color: var(--color1);
            }

            .text-banner p {
                font-family: "monserratsemibold", sans-serif !important;
                font-size: 1rem;
                color: var(--color3);
            }

            .text-banner img {
                width: 20px;
                margin-left: 40%;
                margin-bottom: 10px;
            }

            #carousel-noticias .carousel-item p {
                line-height: 1;
                font-size: 10px;
            }

            #pilares .col-md-5 {
                display: none;
            }

            #lema {
                background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                    url('./public/img/img-page/ica/fachada2_ica.jpg');
                background-size: 350%;
                /* background-position: center; */
                /* background-attachment: fixed; */
                background-repeat: no-repeat;


            }

            #pilares {
                background: linear-gradient(to top,
                        rgba(136, 28, 34, 0.7) 55%,
                        #ffff 10%,
                        #ffff 50%),
                    url("./public/img/img-page/fachadaf.jpg");
                background-size: 300% !important;
                /* background-position: center; */
                padding-top: 4rem;
                padding-bottom: 1rem;
                margin-top: -10px;
                background-repeat: no-repeat;
                border-color: white !important;
            }

            #valores {
                margin-top: 10px;
            }

            .redesS {

                padding-top: 2rem;
                color: var(--color1);
               
                flex-direction: row;
                margin-top: 2rem;
                justify-content: center;
                position: absolute;
                left: 10px;
                bottom:410px;
                z-index: 1;
                display:flex;
            }

            .redesS a {
                font-size: 13px;
                color: var(--color1);
                border: 1px solid var(--color1);
                text-align: center;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                margin-bottom: 10px;
                margin:0px 3px;
                padding-top: 8px;
                display: inline-block;
            }


        }
    </style>
    <?php include_once  './partials/flotante.php'; ?>
    <div class="redesS">
        <div class="red">
            <a class="yt" href="https://www.youtube.com/channel/UCIc7wdy6dQBJ9DCu4SFJh7g" target="_blank">
                <span><i class="fab fa-youtube"></i></span>
            </a>
        </div>
        <div class="red">
            <a class="fb" href="https://www.facebook.com/IEPALASPERUANAS.OFICIAL.ICA/?ref=pages_you_manage" target="_blank">
                <span><i class="fab fa-facebook-f"></i></span>
            </a>
        </div>
        <div class="red">
            <a class="tw" href="https://twitter.com/alas_peruanas_" target="_blank">
                <span><i class="fab fa-twitter"></i></span>
            </a>
        </div>
        <div class="red">
            <a class="ig" href="https://z-p15.www.instagram.com/iepalasperuanas_ica/?hl=es-la" target="_blank">
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
                                <p id="lema-banner">"Razón, Fe, Responsabilidad, Disciplina"</p>
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
                                <p id="lema-banner">"Razón, Fe, Responsabilidad, Disciplina"</p>
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
                                <p id="lema-banner">"Razón, Fe, Responsabilidad, Disciplina"</p>
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
                            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>
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
                <div class="col-lg-6 mt-4 mb-4">

                    <h1 style="text-align:start;color:var(--color3);">Bienvenidos</h1>
                    <div class="separador mx-start"></div>
                    <img class="bgmusica" src="./public/img/icons/dios.png" alt="">
                </div>
                <div class="col-lg-5 mt-4 mb-4">
                    <div class="row ">
                        <div class="col-lg">
                            <p>Nuestra institución tiene 23 años al servicio de la educación iqueña,
                                formando estudiantes integrales y nuestra educación va de acuerdo a
                                cada etapa de su desarrollo, en diversos ámbitos de la ciencia,
                                tecnología, arte y deporte.</p>
                            <p>Entendemos que una formación educativa
                                de alto nivel está cimentada en la adquisición
                                de habilidades y conocimientos para instruir ciudadanos
                                capaces de integrarse a la sociedad.</p>
                            <p>Aspiramos a brindar un servicio educativo con excelencia,
                                sólido en valores, desarrollando en los estudiantes competencias
                                que promuevan la investigación, la innovación y el cuidado
                                del medio ambiente.</p>
                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="main_div">
                                    <a href="./historia.php"><button>Conoce Nuestra Historia</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="propuesta">
        <div class="container">
            <h3 style="color:var(--color1);">NUESTRA PROPUESTA EDUCATIVA</h3>
        </div>
        <br>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/ica/inicial.jpg" alt="inicial">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="./inicial.php" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="./inicial.php" class="card-title">INICIAL</a>
                            <div class="line"></div>
                            <br>
                            <p class="">La educación en el nivel inicial de los Colegios Alas Peruanas,
                                se centra en la atención integral de niños y niñas de 3, 4 y 5 años.
                                Es el nivel que establece las bases de la formación de una personalidad integra y
                                protagónica, a través de su participación activa en los contextos de juego y
                                en los proyectos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/ica/primariaf22.jpg" alt="primaria">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="./primaria.php" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="./primaria.php" class="card-title text-center">PRIMARIA</a>
                            <div class="line"></div>
                            <br>
                            <p>La educación primaria, en el marco de
                                la formación integral, busca desarrollar
                                en el niño y niña el conocimiento científico,
                                la creatividad, el trabajo en equipo y el ejercicio
                                de su ciudadanía de forma protagónica.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/ica/secundariaf2.jpg" alt="secundaria">
                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="./secundaria.php" class="btn">Leer más</a>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="./secundaria.php" class="card-title">SECUNDARIA</a>
                            <div class="line"></div>
                            <br>
                            <p>Nuestro proyecto curricular en el nivel
                                secundaria profundiza y afianza una formación
                                científica, humanística y tecnológica a
                                los adolescentes. </p>
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
                        <div class="col-lg-3 d-flex justify-content-center ">
                            <img src="./public/img/icons/colegio2.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-3 ">
                            <div class="contador_cantidad text-center" data-cantidad-total="23">0</div>
                            <div>
                                <p id="contadorparrafo">años</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row d-flex">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img src="./public/img/icons/profesor.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-2 ">
                            <div class="contador_cantidad text-center" data-cantidad-total="34">0</div>
                            <div>
                                <p id="contadorparrafo">docentes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center contador">
                    <div class="row d-flex">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img src="./public/img/icons/escritorios.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-3">
                            <div class="contador_cantidad text-center" data-cantidad-total="400">0</div>
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
                            <div class="contador_cantidad text-center" data-cantidad-total="1520">1200</div>
                            <div>
                                <p id="contadorparrafo">m² área</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="disciplinas">
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

    </section> -->

    <section id="lema">
        <div class="container">
            <h2>Razón, Fe, Responsabilidad, Disciplina</h2>
            <em>Formando líderes con pensamiento crítico y creativo</em>
            <br>
            <h3 class="title"> <a href="admision.php" style="color: var(--color5);">ADMISIÓN 2023 </a> </h3>
        </div>
    </section>

    <br> <br> <br>

    <section id="noticias">
        <div class="container">
            <h3>NOTICIAS</h3>
            <p style="color:var(--color1);">Mantente informado</p>
            <div class="row">
                <div class="col-lg-4">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=1">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/noticia1.jpg" width="100%" height="250">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">CHIQUI CIENCIAS</h5>

                                <div class="detalle">

                                    Nuestros estudiantes de nivel de inicial(3años) conociendo nuestro cuerpo humano, siempre demostrando sus cualidades desde los mas pequeños
                                    colegio Alas Peruanas Ica
                                    "Tu gran éxito inicia aquí".
                                </div>

                            </div>

                            <div class="card-footer" style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">09-09-2022</span>

                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=2">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/noticia2.jpg" width="100%" height="250">

                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">CONCURSO DE DIBUJO</h5>

                                <div class="detalle">
                                    Premiando a los ganadores de nivel inicial del concurso interno llevado acabo en nuestras instalaciones en conmemoración a nuestro aniversario
                                    colegio Alas Peruanas Ica
                                    “Tu gran éxito inicia aquí”
                                </div>
                            </div>
                            <div class="card-footer" style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                <span class="ms-2">05-09-2022</span>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=3">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/noticia3.jpg" width="100%" height="250">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color1);">Rally de Comunicación</h5>

                                <div class="detalle">
                                    Nuestros estudiantes de nivel secundaria dejando en Alto a nuestra Institución, ocuparon los Primeros Puestos en el RALLY de COMUNICACION, "cada hombre es hijo de sus propias obras"
                                    Colegio Alas Peruanas.
                                    “Tu gran éxito inicia aquí”
                                </div>

                            </div>

                            <div class="card-footer " style="background: transparent; font-size: 16px;color:black;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2 ">02-09-2022</span>

                            </div>

                        </div>
                    </a>
                </div>


            </div>
        </div>

    </section>

    <br> <br> <br>

    <section id="contacto">
        <div class="container mt-5" id="contact">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h2 class="title">INFORMACIÓN DE CONTACTO</h2>
                    <!-- <div class="separador"></div> -->
                    <div class="d-flex justify-content-start flex-lg-row flex-column celEmail">
                        <div class="d-flex ">
                            <span class="me-4"> <i class="fas fa-phone-alt fa-lg" style="color: var(--color1);"></i> </span>
                            <div class="col-lg">
                                <h5>Teléfonos</h5>
                                <p class="mt-3 text">944 594 646 - 993764570</p>
                            </div>
                        </div>
                        <div class="d-flex " style="margin:0px 0px 0px 3px;">
                            <span class="me-4"> <i class="fas fa-envelope fa-lg" style="color: var(--color1);"></i> </span>
                            <div class="col-lg">
                                <h5>Email</h5>
                                <a id="correocontacto" href="mailto:admision-alasperuanas_aqp@iepap.edu.pe" class="mt-3 text">admision-alasperuanas_aqp@iepap.edu.pe</a><br>
                                <a id="correocontacto" href="mailto:iepalasperuanasaqp@iepap.edu.pe" class="mt-3 text">iepalasperuanasaqp@iepap.edu.pe</a>
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
                            <p class="mt-3 text">Calle Urubamba N: 205 Ica</p>
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
                            <a class="yt" href="https://www.youtube.com/channel/UCIc7wdy6dQBJ9DCu4SFJh7g" target="_blank">
                                <span><i class="fab fa-youtube"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="fb" href="https://www.facebook.com/Colegio-Alas-Peruanas-AQP-100289138340360/?ref=pages_you_manage" target="_blank">
                                <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="tw" href="https://twitter.com/alas_peruanas_" target="_blank">
                                <span><i class="fab fa-twitter"></i></span>
                            </a>
                        </div>
                        <div class="red">
                            <a class="ig" href="https://www.instagram.com/iepalasperuanas_ica/" target="_blank">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1935.0956471119393!2d-75.727769!3d-14.0658785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e2bd61b93d21%3A0x571e8e35a72db156!2sColegio%20Privado%20Alas%20Peruanas!5e0!3m2!1ses!2spe!4v1663879429048!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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





</html>