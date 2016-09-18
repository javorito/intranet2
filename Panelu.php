<?php
	require 'scripts/funciones.php';
	
	if(! haIniciadoSesion())
	{
		header('Location: index.php');
	}
	
	conectar();
	$sedes = getSedesPorUser();
	desconectar();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <title>Narrow Jumbotron Template for Bootstrap</title>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Inicio</a></li>
            <li role="presentation"><a href="scripts/salir.php">Cerrar Sesion</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>

      <div class="jumbotron">
        <h1>Bienvenido, <?= $_SESSION['usuario'] ?></h1>
        <p class="lead">Este es tu panel de administracion de alumnos, donde podras ingresar, modificar y editar datos. <b><br />Usa con precacion la intranet para evitar que modificar los datos ingresados</b>.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>

    	<div class="row marketing">       
  
  <?php foreach( $sedes as $fila ): ?>
  		<div class="col-lg-6">
          <h4><a href="sedes/<?= $fila[2] ?>"><?= $fila[0] ?></a></h4>
          <p><?= $fila[1] ?></p>    
        </div>
  <?php endforeach ?>

  		</div>

		
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
