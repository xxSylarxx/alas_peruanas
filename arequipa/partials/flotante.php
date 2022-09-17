<style>
    /* boton locales */
    .div-social {

        padding-top: 2rem;
        color: var(--color1);
        /* display: flex; */
        flex-direction: column;
        margin-top: 2rem;
        justify-content: end;
        position: fixed!important;
        left: 10px;
        bottom: 400px;
        z-index: 99 !important;

    }

    .div-social a {

        color: white
    }

    .div-social>.opcion1:hover {

        background-color: var(--color1);
    }

    .div-social>.opcion2:hover {

        background-color: var(--color1);
    }

    .div-social>.opcion1 {
        background-color: rgba(239, 60, 73, .5);
        border-bottom: 1px solid #fff;
        border-radius: 10px 0px 10px 0px;
    }

    .div-social>.opcion2 {
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
            bottom: 350px;
            z-index: 99999;

        }
    }

    @media screen and (max-width:500px) {

    }
</style>

<div class="div-social">

        <div class="opcion1 p-2 text-white">
            <a href="../index.php"><span class="fas fa-home"></span>&nbsp;PRINCIPAL</a>
        </div>
        <div class="opcion2 p-2 text-white">
            <a href="./index.php"><span class="fa fa-graduation-cap"></span> FILIAL AREQUIPA</a>
        </div>
        <div class="opcion2 p-2 text-white">
            <a href="../ica/index.php"><span class="fa fa-graduation-cap"></span> FILIAL ICA</a>
        </div>
    </div>