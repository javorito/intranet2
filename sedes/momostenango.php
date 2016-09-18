<?php
	require '../scripts/funciones.php';
	
	if(! haIniciadoSesion())
	{
		header('Location: index.php');
	}
	
	conectar();
	
	$sedes = getSedesPorUser();
	desconectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sección de Tareas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <style>
    body { padding-top: 50px; }
    .starter-template { padding: 40px 15px; text-align: center; }
    </style>
  </head>

  <body>

<?php 
	require 'menus/menu-header.php'
?>


    <div class="container">

      <div class="starter-template">
        <h1>Sección de Tareas</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
