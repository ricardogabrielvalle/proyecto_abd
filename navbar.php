<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    $sesion_activa = true;
    $email = $_SESSION['email'];
    if($_SESSION['administrador'] == true)
    {
        $nivel_usuario = "administrador";
    }
    else if($_SESSION['usuario'] == true)
    {
        $nivel_usuario = "usuario";
    }
    else
    {
        $nivel_usuario = "lectura";
    }
}
else
{
    $sesion_activa = false;
}
?>
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
        <?php 
            if($sesion_activa == true)
            {
              if($nivel_usuario == "administrador")
              {
              ?>
              <div class="sticky-top">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="index.php">
                      <img src="img/2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      Librería San Francisco.
                  </a>
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adm. Base de datos
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="respaldo.php">Respaldar BD</a>
                        <a class="dropdown-item" href="auditoria.php">Auditoria</a>
                      </div>
                    </li>
                  </ul>
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestionar libros
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="agregar_libro.php">Agregar libro</a>
                        <a class="dropdown-item" href="modificar_libros.php">Modificar libro</a>
                        <a class="dropdown-item" href="eliminar_libro.php">Eliminar libro</a>
                        <a class="dropdown-item" href="mostrar_libros.php">Mostrar libro</a>
                      </div>
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

                      <a href="cerrar_sesion.php" class="btn btn-outline-dark my-2 my-sm-0">Cerrar sesion</a>

                  </div>
              </nav>
              </div>
              <?php
              }
              else if($nivel_usuario == "usuario")
              {
              ?>
              <div class="sticky-top">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="index.php">
                      <img src="img/2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      Librería San Francisco.
                  </a>

                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="mostrar_libros.php">Libros</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi perfil
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Favoritos</a>
                        <a class="dropdown-item" href="#">Perfil</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="nosotros.php">Sobre Nosotros</a>
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

                      <a href="cerrar_sesion.php" class="btn btn-outline-dark my-2 my-sm-0">Cerrar sesion</a>

                  </div>
              </nav>
              </div>
              <?php
              }
            }
            else
            {
            ?>
            <div class="sticky-top">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="index.php">
                      <img src="img/2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      Librería San Francisco.
                  </a>

                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="mostrar_libros.php">Libros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="nosotros.php">Sobre Nosotros</a>
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
                      <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#iniciar_sesion">
                        Iniciar sesión
                      </button>
                  </div>
              </nav>
            </div>
            <?php
            }
        ?>
    </body>
</html>