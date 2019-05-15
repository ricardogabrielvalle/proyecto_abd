<?php 
require 'conexion.php';
$sql = "SELECT * FROM tabla_auditoria";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container" style="margin:auto;">
    <center>
        <h1>Auditoria a las inserciones de libros.</h1>
    </center>
        <center>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">Titulo</th>
                      <th scope="col">Autor</th>
                      <th scope="col">ISBN</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Fecha</th>
              </thead>
              <?php while($row = $resultado->fetch_assoc()):?>
              <?php
                $tirulo_copia = $row["titulo_copia"];
                  $autor_copia= $row["autor_copia"];
                  $isbn_copia = $row["isbn_copia"];
                  $usuario= $row["usuario"];
                  $fecha = $row["fecha"];
              ?>
              <tbody>
                  <tr>
                      <td scope="row"><?php echo $tirulo_copia ?></td>
                      <td><?php echo $autor_copia ?></td>
                      <td><?php echo  $isbn_copia ?></td>
                      <td><?php echo $usuario ?></td>
                      <td><?php echo $fecha ?></td>
                  </tr>
                  
                  <?php endwhile; ?>
              </tbody>
          </table>
        </center>
    </div>
    <?php $conexion->close(); ?>
</body>
</html>