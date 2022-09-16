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
                <div class="card_image"><img src="./public/img/img-page/arequipa/primaria.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">TRABAJO COOPERATIVO</h2>
                    <br>
                    <p class="card_text">La cooperación se desarrolla entre niños y niñas 
                        como una forma de trabajo para favorecer su aprendizaje y confianza 
                        en sí mismos donde el maestro interviene haciendo uso de diversos recursos.</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/primaria2.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">EJERCICIO DE CIUDADANÍA</h2>
                    <br>
                    <p class="card_text">Los niños y niñas participan activamente en la 
                        organización y representación de su aula y nivel, además desarrollan proyectos.</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/primaria3.jpeg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">DESARROLLO ACADÉMICO</h2>
                    <br>
                    <p class="card_text">La actividad del niño y niña se 
                        convierte en el principal medio de aprendizaje, 
                        donde la realidad es el recurso para la observación 
                        y la experimentación.</p>
                   <!--  <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="./public/img/img-page/arequipa/primaria.jpg" width="614" height="417" style="object-fit:cover;"></div>
                <div class="card_content">
                    <h2 class="card_title">FORMACIÓN</h2>
                    <br>
                    <p class="card_text">Los programas académicos y formativos de este nivel 
                        están orientados al desarrollo de habilidades y actitudes que les 
                        permitan a nuestros estudiantes actuar con suficiente autonomía, 
                        responsabilidad, respeto, solidaridad y honestidad.</p>
                    <!-- <button class="btn card_btn">Read More</button> -->
                </div>
            </div>
        </li>
      <!--   <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li> -->
    </ul>
</div>