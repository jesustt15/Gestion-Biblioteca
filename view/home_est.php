<?php
require_once 'layouts/header.php';
?>
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
  
            <!--OPCIONES DEL MENU - LIBROS -->
                <a href="index.php?n=libros">
                    <div class="option">
                        <i class="fas fa-book" title="Libros"></i>
                        <h5>Libros</h5>
                    </div>
                </a>

        </div>

        <!--FIN DEL MENU-->
    </div>
  <!--PARTE MEDIA -->
    <main>
          <!--CONTENEDOR -->
          <div class="container-fluid">
        
            
            <!--CONTENEDOR DE INFO ACERCA DEL TOTAL DE USERS,BOOKS,PRESTAMOS-->
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <!--COLUMNA UNO -->
                            <div class="card" style="width: 18rem;">
                                <img src="./assets/img/libro.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Libros disponibles</h5>
                                    <p class="card-text">CONTEO</p>
                                    <a href="#" class="btn btn-primary">Ir a libros</a>
                                </div>
                        </div>
                    </div>
                    <div class="col">
                            <!--COLUMNA 3 -->
                            <div class="card" style="width: 18rem;">
                                <img src="./assets/img/prestamo.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Préstamos de libros</h5>
                                    <p class="card-text">CONTEO</p>
                                    <a href="#" class="btn btn-primary">Ir a préstamos</a>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
     </div>

        <div class="container-fluid">
                <div class="carrusel">
                    <!--IMAGENES CON FRASES-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./assets/img/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./assets/img/2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./assets/img/3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
     </div>
           
            
     
    </main>

    <!--FOOTER-->

    <!--SCRIPTS-->
    <script src="./assets/js/script_home_adm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
</body>
</html>