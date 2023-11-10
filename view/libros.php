<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA</title>

    
<!--FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!--BOOSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!--CSS-->
<link rel="stylesheet" href="./assets/css/style.css">
<!--AWESOME-->
<script src="https://kit.fontawesome.com/aaff7b5bcd.js" crossorigin="anonymous"></script>


</head>
<body id="b_ad" class="b__admin" >

    <header class="menu__admin">
        <!--PARTE ARRIBA -->

            <div class="icon_menu">
                <i class="fas fa-bars fa-2x" id="btn_open"></i>
            </div>
            
            <div class="cerrar_user">
              <a href="./cerrar_sesion.php">CERRAR SESIÓN</a>  
            </div>

    </header>

    <!--MENU-->
    <div id="menu_side" class="menu__side" >
        <div class="name__page">
            <i class="fas fa-book-reader" style="color: #ece632;"> </i>
            <h5>Biblioteca</h5>
        </div>
        <div class="options__menu">
            <!--OPCIONES DEL MENU - INICIO -->
                <a href="#">
                    <div class="option">
                        <i class="fas fa-home" title="Inicio"></i>
                        <h5>Inicio</h5>
                    </div>
                </a>
            <!--OPCIONES DEL MENU - USUARIOS -->
                <a href="./view/usuarios.php">
                    <div class="option">
                        <i class="fas fa-users" title="Usuarios"></i>
                        <h5>Usuarios</h5>
                    </div>
                </a>
            <!--OPCIONES DEL MENU - LIBROS -->
                <a href="./view/libros.php">
                    <div class="option">
                        <i class="fas fa-book" title="Libros"></i>
                        <h5>Libros</h5>
                    </div>
                </a>
            <!--OPCIONES DEL MENU - PRESTAMOS -->
                <a href="./view/prestamos.php">
                    <div class="option">
                        <i class="fas fa-file-alt" title="Prestamos"></i>
                        <h5>Prestamos</h5>
                    </div>
                </a>
        </div>

        <!--FIN DEL MENU-->
    </div>
  <!--PARTE MEDIA -->
    <main>
            
     
    </main>

    <!--FOOTER-->

    <!--SCRIPTS-->
    <script src="./assets/js/script_home_adm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
</body>
</html>