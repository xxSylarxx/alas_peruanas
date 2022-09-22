<style>
    .topcontrol {
        position: fixed;
        bottom: 5px;
        right: 5px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #333333;
        width: 50px;
        height: 50px;
        /* border-radius: 50%; */
        padding-top: 6px;
        padding-left: 13px;
        border: 2px solid white;
        color: white;
    }

    .topcontrol:hover {
        color: white;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 70px;
        right: 5px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #00D553;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        border: 2px solid white;
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol2:hover {
        transform: scale(1.08);
    }

    .topcontrol2 i {
        color: white;
    }

    @media (max-width: 500px) {
        .topcontrol {
            display: none;
        }

        .topcontrol2 {
            display: none;
        }

    }
</style>

<footer id="footer">

    <div class="container-fluid" id="dates">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center ">
                    <div>
                        <center><img src="./public/img/icons/logo.png" alt="logo" width="20%" height="20%"></center>
                        <br>
                        <center>
                            <h3 style="color:white;">COLEGIO ALAS PERUANAS</h3>
                        </center>

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
                                    <span><i class="fab fa-twitter"></i></i></span>
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
                <div class="col-12 col-md-3 col-lg-3 date-info">
                    <h5>INSTITUCIONAL</h5>
                    <div class="d-flex flex-column text">
                        <a href="../somos.php">Quiénes Somos</a>
                        <a href="../valores.php">Valores</a>
                        <a href="../educativa.php">Propuesta Educativa</a>
                        <a href="../talleres.php">Talleres</a>
                        <a href="../perfil.php">Perfil del Egresado</a>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2 date-info">
                    <h5>NIVELES</h5>
                    <div class="d-flex flex-column text">
                        <a href="#">Inicial</a>
                        <a href="#">Primaria</a>
                        <a href="#">Secundaria</a>

                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 date-info">
                    <div>
                        <h5 style="color:var(--color5);">MÁS NOTICIAS</h5>
                        <br>
                        <a href="/entrada/complex-security">
                            <div class="row d-flex justify-content-around">
                                <div class="col-lg-4"><img src="./public/img/galeria/aniversarioarequipa.jpg" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                <div class="col-lg-7 my-auto"><span style="color:var(--color5);">¡FELIZ 482° ANIVERSARIO, AREQUIPA!</span></div>
                            </div>
                        </a>
                        <hr>
                        <a href="/entrada/examination-and-document-exchange-platfo">
                            <div class="row d-flex justify-content-around">
                                <div class="col-lg-4"><img src="./public/img/galeria/cachimbo.jpg" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                <div class="col-lg-7 my-auto"><span style="color:var(--color5);">FELICIDADES CACHIMBO 2023</span></div>
                            </div>
                        </a>
                        <hr>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <section class="container-fluid barinf">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <p class="mb-0 text-center" style="font-size: 14px;">Colegio Alas Peruanas</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p class="mb-0 text-center" style="font-size: 14px;">Desarrollado por <a href="https://www.cubicol.pe/" target="_blank" style="color: var(--color1);">Sensoft Solutiones</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- <a href="#" class="topcontrol">
        <div>
            <span>
                <i class="fas fa-angle-up fa-2x"></i>
            </span>
        </div>
    </a> -->
    <!-- <div class="topcontrol2">
        <a href="https://api.whatsapp.com/send?phone=51997740838" target="_blank">
            <span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </span>
        </a>
    </div> -->

</footer>