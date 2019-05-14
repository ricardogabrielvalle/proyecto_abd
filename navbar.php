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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#buscar">
                              Buscar un libro
                            </button>
                          </form>
                        </li>
                      </ul>

                      <a href="cerrar_sesion.php" class="btn btn-outline-dark my-2 my-sm-0">Cerrar sesion</a>

                  </div>
              </nav>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Buscar en tiempo real.</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <center>
                          <label for="caja_busqueda"><strong>Buscar:</strong></label>
                          <input type="text" name="caja_busqueda" id="caja_busqueda">
                       </center>

                       <center>
                        <div id="datos">

                        </div>
                       </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
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
                        Mi cuenta
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="mis_favoritos.php">Favoritos</a>
                        <a class="dropdown-item" href="mi_perfil.php">Perfil</a>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#buscar">
                              Buscar un libro
                            </button>
                          </form>
                        </li>
                      </ul>

                      <a href="cerrar_sesion.php" class="btn btn-outline-dark my-2 my-sm-0">Cerrar sesion</a>

                  </div>
              </nav>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Buscar en tiempo real.</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <center>
                          <label for="caja_busqueda"><strong>Buscar:</strong></label>
                          <input type="text" name="caja_busqueda" id="caja_busqueda">
                       </center>

                       <center>
                        <div id="datos">

                        </div>
                       </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark my-2 my-sm-0" data-toggle="modal" data-target="#buscar">
                              Buscar un libro
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
            <!-- Modal -->
              <div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Buscar en tiempo real.</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <center>
                          <label for="caja_busqueda"><strong>Buscar:</strong></label>
                          <input type="text" name="caja_busqueda" id="caja_busqueda">
                       </center>

                       <center>
                        <div id="datos">

                        </div>
                       </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
        ?>
        <script src="JS/main.js"></script>
    </body>
</html>