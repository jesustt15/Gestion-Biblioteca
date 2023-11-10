<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!--BOOSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!--CSS-->
<link rel="stylesheet" href="./assets/css/style.css">
<!--FONT AWESOME-->
<script src="https://kit.fontawesome.com/aaff7b5bcd.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--FORMULARIO REGISTRO Y LOGIN-->
            <div class="contenedor__login-register">

                <!--FORMULARIO LOGIN-->

                <form action="" method="get" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="n_usuario">
                    <input type="password" placeholder="Contraseña" name="contrasenia">

                    <!--BOTON ENTRAR-->
                    <input type="submit" value="Ingresar">
                    <input type="hidden" name="n" value="login">
                </form>
                <!--FORMULARIO REGISTRO -->
                <form action="" method="get" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" required placeholder="Nombre " name="nombre" >
                    <input type="text" required placeholder="Apellido " name="apellido" >
                    <input type="text" required placeholder="Correo Electrónico" name="correo">
                    <input type="text" required placeholder="Usuario" name="n_usuario">
                    <input type="password" required placeholder="Contraseña" name="contrasenia">
                    <input type="text" required placeholder="Rol" name="rol" >
                    <input type="submit"  name="btn" value="GUARDAR"><br>
                    <input type="hidden" name="n" value="guardaru">
                </form>
            </div>
        </div>
    </main>

    <!--FOOTER-->
    <footer>
        <div class="container_footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="">
                </div>
                <div class="terms">
                    <p><i class="fas fa-map-marker-alt"></i> Centro cívico, Puerto Ordaz. Ciudad Guayana, estado Bolívar. Edificio #512</p>
                </div>
            </div>
            <div class="box__footer">
                <h2><i class="far fa-calendar-alt"></i> <i>Horarios de atención</i> </h2>
                <p><i>Lunes a Viernes</i></p>
                <p><i>De 8:30 A.M a 12:00 P.M. </i></p>
                <p><i>De 1:00 P.M a 3:45 P.M</i></p>
            </div>
            <div class="box__footer">
                <h2><i class="fas fa-share-alt"></i> <i>Redes Sociales</i> </h2>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            </div>
        </div>
        <div class="box__copyrigth">
            <hr>
            <p>Todos los derechos reservados <i class="far fa-copyright"></i> 2023 <b>UGMA - Ingeniería</b></p>
        </div>
    </footer>
    <!--SCRIPTS-->
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



