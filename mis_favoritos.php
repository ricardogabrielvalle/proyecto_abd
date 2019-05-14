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
	    <?php endwhile; ?>
	<?php endif;?>
				</tbody>
        </table>
        <div class="container" align="right">
        	<button type="submit" class="btn btn-primary" name="send">Ir al inicio</button>
        </div>
    </form>
</div>
</body>
</html>