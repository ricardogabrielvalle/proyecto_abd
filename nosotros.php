<!DOCTYPE html>
<html>
<body>
	<!-- Navbar -->
	<?php include 'navbar.php'; ?>
	<!--Carrusel -->

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
              <button type="submit" class="btn btn-secondary btn-sm">Ingresar</button>
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
              <button type="submit" class="btn btn-secondary btn-sm">Registrate</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container" align="text-center">
      <h1> NOSOTROS SOMOS: </h1>

      <p> A través de un desarrollo y evolución constante, en la actualidad somos una cadena de 33 librerías en las ciudades de Guadalajara, Puerto Vallarta, León, Aguascalientes, San Luis Potosí, Querétaro, Torreón, Monterrey, Chihuahua, Culiacán y Mazatlán.

      La librería virtual www.libreriasfrancisco.com.mx se inaugura en 2019, y brinda servicio nacional e internacionalmente las 24 hrs. de los 7 días de la semana.

      Adicionalmente, el Centro de Distribución Nacional de LIBRERIAS SAN FRANCISCO en Guadalajara atiende pedidos de mayoreo de escuelas, universidades, empresas, entidades gubernamentales, etc. y  participa en licitaciones en todo México.   

      Nuestras librerías ofrecen un servicio rápido y eficiente, y tienen el más amplio surtido en libros de interés general, profesionales, académicos y de texto para todos los niveles educativos en español, inglés y otros idiomas, así como libros de lectura para niños, jóvenes y adultos en inglés y en español. </p>

      <h2> MISIÓN </h2>
      <p>Apoyar el fomento a la lectura en nuestro país, brindando espacios dignos y agradables al libro para su adecuada exhibición y comercialización, y hacerlo llegar a todo el territorio nacional en tiempos razonables y a precios justos. </p>

      <h2> VISIÓN </h2>
      <p> Participar activamente en el desarrollo cultural y educativo de México, como una empresa líder y confiable para los distintos segmentos de mercado a los que llegamos. 
      Apoyar y participar en la evolución de la industria editorial hacia nuevas formas de distribución y comercialización de contenidos en formato electrónico e impreso. </p>

      <h2> VALORES </h2>
      <p>Honestidad, ética y compromiso con nuestra actividad.

      Respeto a nuestros clientes, proveedores, colaboradores y empleados, instituciones públicas, y en general a la comunidad a la que servimos. 

      EL LIBRO en sus diversos formatos ocupa un lugar especial en el desarrollo de la humanidad, por ser transmisor de la historia y de la cultura de generación en generación. </p>

      <h2> HEMOS RECORRIDO UN LARGO CAMINO. . . MUCHO MÁS NOS QUEDA POR ALCANZAR </h2>
    </div>
    
	<!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      © 2019 Copyright:
        <a href="index.php"> Librería San Francisco.</a>
    </div>
</body>
</html>