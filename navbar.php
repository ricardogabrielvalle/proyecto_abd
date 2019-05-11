<!doctype html>
<html lang="en">
    <head>

    </head>
    <!-- Barra de navegación -->
    <body style="height:2000px">
        <?php include 'librerias.php'; ?>
        <div>
            <center><img src="img/1.png" class="img-fluid" alt="Responsive image" ></center>
        </div>

        <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Librería San Francisco.
            </a>

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Libros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nosotros</a>
              </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#buscar">
                        Buscar
                      </button>
                    </form>
                  </li>
                </ul>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#formulario">
                  Iniciar sesión
                </button>
            </div>
        </nav>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue fixed-bottom">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
              © 2019 Copyright:
                <a href="index.php"> Librería San Francisco.</a>
            </div>
        <!-- Copyright -->

    </body>
</html>