<?php 
require 'conexion.php';
$sql = "SELECT * FROM libros";
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
                <h1>Libros</h1>
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
                                <?php if(isset($nivel_usuario) && $nivel_usuario == "usuario"):?>
                                    <th scope="col">Favorito</th>
                                <?php endif;?>
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
                            $precio = $row['precio'];
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
                                <?php if(isset($nivel_usuario) && $nivel_usuario == "usuario"):?>
                                <td>
                                    <form action="agregar_favorito.php" method="post">
                                        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                                        <button type="submit" class="btn btn-primary" name="favorito">Agregar</button>
                                    </form>
                                </td>
                                <?php endif;?>
                            </tr>
                            
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <form action="index.php">
                        <div class="container" align="right">
                            <button type="submit" class="btn btn-primary" name="send">Ir al inicio</button>
                        </div>
                    </form>
            </div>
            <?php $conexion->close(); ?>

</body>
</html>