<!DOCTYPE html>
<html>
<body>
	<!-- Navbar -->
	<?php include 'navbar.php'; ?>
	<!--Carrusel -->
	<?php include 'carrusel.php'; ?>

    <!-- Modal inicio de sesión -->
    <div class="modal fade" id="iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form onsubmit="return valida_Login();" method="POST" action="validaUsuario.php">
              <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese email" name="email">
                <small id="email" name="email" class="form-text text-muted">Ingresar al sistema con tu usuario y contraseña o registrate.</small>
              </div>
              <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <input type="submit"  class="btn btn-secondary btn-sm" values="Ingresar" onclick="cifrar1()">
            </form>
          </div>
          <div class="modal-footer">
            <!-- Button registrarse -->
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registrarse" data-dismiss="modal">
              ¡Registrate!
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal registrarse -->
    <div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrate.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="insertarUsuario.php" onsubmit="return valida();">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group col-md-6">
                  <label for="Apellido">Apellido</label>
                  <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="Emai">Email</label>
                  <input type="text" class="form-control" id="email_r" placeholder="Email" name="email_r">
                </div>
                <div class="form-group col-md-4">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="password_r" placeholder="Password" name="password_r">
                </div>
              </div>
              <div class="form-group">
                <label for="Direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" placeholder="1234 Main St" name="direccion">
              </div>
                <!-- Button trigger modal registrar -->
              <input type="submit" class="btn btn-secondary btn-sm" value="Registrate" onclick="cifrar()">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <?php 
    require 'conexion.php';
    $sql = "SELECT * FROM libros";
    $resultado = $conexion->query($sql);
    ?>
    <div class="container" style="margin:auto;">
      <h1>Libros</h1>
      <form action="index.php">
          <table class="table table-responsive">
              <thead>
                  <tr>
                      <th scope="col">Código</th>
                      <th scope="col">Título</th>
                      <th scope="col">Autor</th>
                      <th scope="col">ISBN</th>
                      <th scope="col">Sinopsis</th>
                      <th scope="col">Editorial</th>
                      <th scope="col">Materia</th>
                      <th scope="col">Páginas</th>
                      <th scope="col">Encuadernación</th>
                  </tr>
              </thead>
              <?php while($row = $resultado->fetch_assoc()):?>
              <?php
                $codigo = $row["codigo"];
                  $titulo = $row["titulo"];
                  $autor = $row["autor"];
                  $isbn = $row["isbn"];
                  $sinopsis = $row["sinopsis"];
                  $editorial = $row["editorial"];
                  $materia = $row["materia"];
                  $paginas = $row["paginas"];
                  $encuadernacion = $row["encuadernacion"];
              ?>
              <tbody>
                  <tr>
                      <th scope="row"><?php echo $codigo ?></th>
                      <td><?php echo $titulo ?></td>
                      <td><?php echo $autor ?></td>
                      <td><?php echo $isbn ?></td>
                      <td><?php echo $sinopsis ?></td>
                      <td><?php echo $editorial ?></td>
                      <td><?php echo $materia ?></td>
                      <td><?php echo $paginas ?></td>
                      <td><?php echo $encuadernacion ?></td>
                  </tr>
                  
                  <?php endwhile; ?>
              </tbody>
          </table>
      </form>
  </div>
  <?php $conexion->close(); ?>
	<!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      © 2019 Copyright:
        <a href="index.php"> Librería San Francisco.</a>
    </div>
    <script src="sha1.js"></script>
    <script>
        function cifrar()
        {
            var input_password_r = document.getElementById("password_r");
            input_password_r.value = SHA1(input_password_r.value);
        }
        function cifrar1()
        {
            var input_password = document.getElementById("password");
            input_password.value = SHA1(input_password.value);
        }
    </script>
</body>
</html>