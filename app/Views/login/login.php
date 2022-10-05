<style>
    .hola {
        background-color: blue;
        width: 5%;
    }

    body {
        background-image: url("<?= base_url() ?>/public/login/bg5.jpg");

    }
</style>
<main>

    <style>
        .ver_boton {

        }

        .btn-neon {
            color: red;
            font-size: 40px;
    
        }

        .btn-neon {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            letter-spacing: 4px;
            font-size: 50px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2s;

        }

        .btn-neon:hover {
            background: #a945c7;
            box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 80px #a945c7;
            transition-delay: 0.5s;
        }

        .btn-neon span {
            position: absolute;
            display: block;
        }

        #span1 {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #a945c7);
        }

        .btn-neon:hover #span1 {
            left: 100%;
            transition: 1s;
        }
    </style>
    <div class="ver_boton ">
        <a class="  col-md-2" href="<?= base_url() ?>/">
        <span id="span1"></span>
            <i class="fas fa-angle-double-left   btn-neon"></i>
        </a>
    </div>



    <div class="contenedor__todo ">
        <div class="regresar_flecha">
            <i class="flaticon-cross"></i>

        </div>


        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Olvidaste tu contraseña?</h3>

                <button id="btn__registrarse">VER MAS</button>
            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="<?= site_url('/ingresar') ?>" method="POST" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>

            <!--Register-->
            <form action="php/registro.php" method="POST" class="formulario__register">
                <h2>Somos</h2>
                <h2>NEW STAR</h2>
                <p>Un grupo de jovenes sufriendo con su tesis</p>

            </form>
        </div>
    </div>

</main>