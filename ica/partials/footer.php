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
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #00D553;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol2:hover {
        transform: scale(1.08);
    }

    .topcontrol2 i {
        color: white;
        margin-top: 2px;
        margin-left: 2px;
    }

    .topcontrol3 {
        position: fixed;
        bottom: 134px;
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: rgb(31, 202, 216, 1);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol3 img {
        height: 32px;
        width: 30px;
        margin-top: 5px;
        margin-left: 2px;
    }

    .topcontrol3:hover {
        transform: scale(1.08);
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
    <a href="#" class="text-white" style="position: absolute; right: 20px; z-index: 999;  font-size: 40px;">
        <span style="color: var(--color2);"><i class="fas fa-chevron-circle-up"></i></span>
    </a>
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
                    <h5>SEDES</h5>
                    <div class="d-flex flex-column text">
                        <a href="../arequipa/index.php">Arequipa</a>
                        <a href="#">Ica</a>
                        <!-- <a href="./secundaria.php">Secundaria</a> -->

                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 date-info">
                    <div>
                        <h5 style="color:var(--color5);">MÁS NOTICIAS</h5>
                        <br>
                        <a href="view.php?id=1">
                            <div class="row d-flex justify-content-around">
                                <div class="col-lg-4"><img src="./public/img/galeria/noticia1.jpg" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                <div class="col-lg-7 my-auto"><span style="color:var(--color5);">CHIQUI CIENCIAS</span></div>
                            </div>
                        </a>
                        <hr>
                        <a href="view.php?id=2">
                            <div class="row d-flex justify-content-around">
                                <div class="col-lg-4"><img src="./public/img/galeria/noticia2.jpg" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                <div class="col-lg-7 my-auto"><span style="color:var(--color5);">CONCURSO DE DIBUJO</span></div>
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
    <div class="topcontrol2">
        <a href="https://wa.me/+51944594646" target="_blank">
            <span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </span>
        </a>
    </div>
    <div class="topcontrol3">
        <a href="https://iepalasperuanasica.cubicol.pe/principal/login" target="_blank">

            <img src="./public/img/icons/cubo.png" alt="">

        </a>
    </div>

</footer>