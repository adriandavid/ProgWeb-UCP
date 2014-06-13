<?php
session_start();
?>
<html>
   

    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
    </head>

      <body background="fondo1.jpg"> 
        

       <link href="estilo.css"
              
      rel="stylesheet" type="text/css">
      
      
        
  <div class="titles">
    <h1>PuntoNet</h1>
    
		
	</div>
<h2>Iniciar Sesión</h2>
	<!-- Formulario -->
        <form action="Negocios/postlogin.php" method="post" id="main">
                        
		<!-- Usuario -->
		<label>Nombre de usuario:</label>
		<input type="text" name="user" placeholder="puntonet@ejemplo.com">

		<!-- Contraseña -->
		<label>Contraseña:</label>
                <input type="password" name="pass" placeholder="**********">

		<!-- Enviar -->
		<input type="submit" value="lOGIN">

                <p class="perder"><a href="#">Olvide mi contraseña</a> | <a href="registrarse.html">Registrarme</a></p>

	</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
