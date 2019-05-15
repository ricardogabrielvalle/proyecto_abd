<?php
include 'navbar.php';
?>
<center><strong><h1>Agregar nuevo libro.</h1></strong></center>
<div class="container">
	<form action="insertar_libro.php" method="post">
	<div class="form-row">
	  <div class="form-group col-md-6">
	    <label for="titulo">Título</label>
	    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título del libro">
	  </div>
	  <div class="form-group col-md-6">
	    <label for="autor">Autor</label>
	    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
	  </div>
	 </div>
	 <div class="form-row">
	  <div class="form-group col-md-4">
	    <label for="isbn">ISBN</label>
	    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="editorial">Editorial</label>
	    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="materia">Materia</label>
	    <input type="text" class="form-control" id="materia" name="materia" placeholder="Materia">
	  </div>
	</div>
	  <div class="form-group">
	    <label for="sinopsis">Sinopsis</label>
	    <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
	  </div>
	  <div class="form-row">
	  <div class="form-group  col-md-4">
	    <label for="paginas">Número de páginas</label>
	    <input type="text" class="form-control" id="paginas" name="paginas" placeholder="No. Páginas">
	  </div>
	  <div class="form-group  col-md-4">
	    <label for="encuadernacion">Encuadernación</label>
	    <select class="form-control" id="encuadernacion" name="encuadernacion">
	      <option>Pasta tradicional</option>
	      <option>Pasta dura</option>
	    </select>
	  </div>
	  <div class="form-group  col-md-4">
	    <label for="precio">Precio</label>
	    <input type="text" class="form-control" id="precio" name="precio" placeholder="Escriba el precio del libro">
	  </div>
	</div>
	<div class="container" align="right">
	  <button type="submit" class="btn btn-primary">Agregar datos</button>
	</div>
	</form>
</div>
