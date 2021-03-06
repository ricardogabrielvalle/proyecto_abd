<!DOCTYPE html>
<html>
<head>
	<title>Mis favoritos</title>
</head>
<body>
	<?php include "navbar.php";
	require "conexion.php";
	$sql = "SELECT codigo_libro FROM favoritos WHERE email='$email'";
	$resultado = $conexion->query($sql);
	?>
	<div class="container" style="margin:auto;">
    <h1>Favoritos</h1>
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
                    <th scope="col">Precio</th>
                </tr>
            </thead>
	<?php if ($resultado->num_rows > 0): ?>
	    <?php while($row = $resultado->fetch_assoc()): ?>
	    	<?php
	        $codigo = $row["codigo_libro"];
	        $sql = "SELECT * FROM libros WHERE codigo='$codigo'";
	        $consulta_libro = $conexion->query($sql);
	        ?>
	        <?php while ($row_libro = $consulta_libro->fetch_assoc()): ?>
	        	<?php 
	        	$titulo = $row_libro["titulo"];
	        	$autor = $row_libro["autor"];
                $isbn = $row_libro["isbn"];
                $sinopsis = $row_libro["sinopsis"];
                $editorial = $row_libro["editorial"];
                $materia = $row_libro["materia"];
                $paginas = $row_libro["paginas"];
                $encuadernacion = $row_libro["encuadernacion"];
                $precio = $row_libro['precio'];
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
                        <td><?php echo $precio ?></td>
                    </tr>        
                <?php endwhile; ?>      
	    <?php endwhile; ?>
	<?php endif;?>
				</tbody>
        </table>
        <div class="container" align="right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#comprar">
              Comprar libro(s)
            </button>
        	<button type="submit" class="btn btn-primary" name="send">Ir al inicio</button>
        </div>
    </form>
</div>
        <!-- Modal -->
        <div class="modal fade" id="comprar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comprar libro(s).</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>Total de la compra: <?php echo $precio ?></h3>
                <form action="comprar.php" method="post">
                  <div class="form-group">
                    <input type="hidden" value="<?php echo $codigo ?>" name="codigo">
                    <label for="Numero">Numero de tarjeta.</label>
                    <input type="text" class="form-control" id="tarjeta" placeholder="4152 3129 1942 4629" name="tarjeta">
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="CVC">CVC.</label>
                        <input type="text" class="form-control" id="cvc" placeholder="000" name="cvc">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Fecha">Fecha.</label>
                        <input type="date" id="fecha" name="fecha">
                      </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Realizar compra">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
</body>
</html>