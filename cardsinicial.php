<style>
    /* Font */
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

    /* Design */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

/*     html {
        background-color: #ecf9ff;
    }

    body {
        color: #272727;
        font-family: 'Quicksand', serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
        padding: 1rem;
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        font-weight: 400;
        text-align: center;
    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }
 */
    .btn {
        color: #ffffff;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
        flex-direction: row-reverse;
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            width: 50%;
        }
    }

    .card {
        background-color: white;
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .card_content {
        height: 100%;
        padding: 1rem;
        background: linear-gradient(to bottom left, #000000 40%,#7e1113 100%);
    }

    .card_title {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
    }

    .card_text {
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }

    .made_by {
        font-weight: 400;
        font-size: 13px;
        margin-top: 35px;
        text-align: center;
    }
</style>

<div class="main">
    <!-- <h1>Responsive Card Grid Layout</h1> -->
    <ul class="cards">
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/inicial.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">ACTIVIDAD LÚDICA</h2>
                    <br>
                    <p class="card_text">A través del juego, el niño y la niña se apropian del mundo y 
                        sus relaciones con los demás, resuelve conflictos y pone a prueba su inventiva; 
                        así mismo es mediado por los demás</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/inicial2.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">FORMACIÓN DE LA IDENTIDAD</h2>
                    <br>
                    <p class="card_text">Aprende a 
                        reconocerse como niño, niña, como miembro de 
                        una familia donde puede expresar sus emociones 
                        con naturalidad y mucha seguridad.</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/inicial.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">PROTAGONISMO INFANTIL</h2>
                    <br>
                    <p class="card_text">La participación activa de los niños y 
                        niñas desarrolla el compromiso y la dedicación; ello implica desarrollar la capacidad de trabajar solidariamente a partir de consensos.</p>
                   <!--  <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/inicial2.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">DESARROLLO DE HABILIDADES</h2>
                    <br>
                    <p class="card_text">Se desarrolla habilidades para el desarrollo de destrezas motrices, gruesas y finas.Se empieza a desarrollar el proceso de lectura y escritura.</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
    </ul>
</div>