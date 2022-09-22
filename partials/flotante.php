<style>
    /* boton locales */
    .div-social {

        padding-top: 2rem;
        color: var(--color1);
        /* display: flex; */
        flex-direction: column;
        margin-top: 5rem;
        justify-content: end;
        position: fixed !important;
        left: 10px;
        bottom: 450px;
        z-index: 99 !important;

    }

    .div-social a {

        color: white
    }

    .opcion1:hover {

        background-color: var(--color1);
    }

    .opcion2:hover {

        background-color: var(--color1);
    }

    .opcion1 {
        background-color: var(--color1);
        border-bottom: 1px solid #fff;
        border-radius: 10px 0px 10px 0px;
    }

    .opcion2 {
        background-color: rgba(239, 60, 73, .5);
        border-bottom: 1px solid #fff;
        border-radius: 10px 0px 10px 0px;
    }

    @media screen and (max-width:1300px) {


        .div-social {

            padding-top: 2rem;
            color: var(--color1);
            /* display: flex; */
            flex-direction: column;
            margin-top: 2rem;
            justify-content: center;
            position: absolute;
            left: 10px;
            bottom: 320px;
            z-index: 99999;

        }
    }

    @media screen and (max-width:500px) {}
</style>

<div class="div-social">

    <a href="./index.php">
        <div class="opcion1 p-2 text-white">
            <span class="fas fa-home"></span>&nbsp;PRINCIPAL
        </div>
    </a>
    <a href="./arequipa/index.php">
        <div class="opcion2 p-2 text-white">
            <span class="fa fa-graduation-cap"></span> SEDE AREQUIPA
        </div>
    </a>
    <a href="./ica/index.php">
        <div class="opcion2 p-2 text-white">
            <span class="fa fa-graduation-cap"></span> SEDE ICA
        </div>
    </a>
</div>