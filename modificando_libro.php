<?php 
$codigo = $_POST['seleccion'];

require 'conexion.php';
$sql = "SELECT * FROM libros WHERE codigo='" . $codigo . "'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
$titulo = $row["titulo"];
$autor = $row["autor"];
$isbn = $row["isbn"];
$sinopsis = $row["sinopsis"];
$editorial = $row["editorial"];
$materia = $row["materia"];
$paginas = $row["paginas"];
$encuadernacion = $row["encuadernacion"];
$precio = $row["precio"];
$conexion->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'navbar.php' ?>
	<div class="container">
		<center><strong><h1>Formulario para editar libro.</h1></strong></center>
		<form action="actualiza_libro.php" method="post">
			<div class="form-group">
			    <input type="hidden" class="form-control" 
			    id="codigo" name="codigo" value="<?php echo $codigo ?>">
			  </div>
		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="titulo">Título</label>
			    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo ?>">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="autor">Autor</label>
			    <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $autor ?>">
			  </div>
		  </div>
		  <div class="form-row">
			  <div class="form-group col-md-4">
			    <label for="isbn">ISBN</label>
			    <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn ?>">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="editorial">Editorial</label>
			    <input type="text" class="form-control" id="editorial" name="editorial" value="<?php echo $editorial ?>">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="materia">Materia</label>
			    <input type="text" class="form-control" id="materia" name="materia" value="<?php echo $materia ?>">
			  </div>
		  </div>
		  	<div class="form-group">
			   <label for="sinopsis">Sinopsis</label>
			   <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"><?php echo $sinopsis ?></textarea>
			</div>
		  <div class="form-row">
			  <div class="form-group  col-md-4">
			    <label for="paginas">Número de páginas</label>
			    <input type="text" class="form-control" id="paginas" name="paginas" value="<?php echo $paginas ?>">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="encuadernacion">Encuadernación</label>
			    <select class="form-control" id="encuadernacion" name="encuadernacion">
			      <option>Pasta tradicional</option>
			      <option>Pasta dura</option>
			    </select>
			  </div>
			  <div class="form-group col-md-4">
			    <label for="precio">Precio</label>
			    <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $precio ?>">
			  </div>
		 </div>
		  <div class="container" align="right">
		  	<button type="submit" class="btn btn-primary">Actualizar</button>
		  </div>
		</form>
	</div>
</body>
</html>