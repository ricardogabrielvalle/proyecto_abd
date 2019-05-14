<?php
include 'navbar.php';
?>
<div class="container">
	<form action="insertar_libro.php" method="post">
	  <div class="form-group">
	    <label for="titulo">Título</label>
	    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título del libro">
	  </div>
	  <div class="form-group">
	    <label for="autor">Autor</label>
	    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
	  </div>
	  <div class="form-group">
	    <label for="isbn">ISBN</label>
	    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
	  </div>
	  <div class="form-group">
	    <label for="sinopsis">Sinopsis</label>
	    <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="editorial">Editorial</label>
	    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial">
	  </div>
	  <div class="form-group">
	    <label for="materia">Materia</label>
	    <input type="text" class="form-control" id="materia" name="materia" placeholder="Materia">
	  </div>
	  <div class="form-group">
	    <label for="paginas">Número de páginas</label>
	    <input type="text" class="form-control" id="paginas" name="paginas" placeholder="No. Páginas">
	  </div>
	  <div class="form-group">
	    <label for="encuadernacion">Encuadernación</label>
	    <select class="form-control" id="encuadernacion" name="encuadernacion">
	      <option>Pasta tradicional</option>
	      <option>Pasta dura</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="precio">Precio</label>
	    <input type="text" class="form-control" id="precio" name="precio" placeholder="Escriba el precio del libro">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
