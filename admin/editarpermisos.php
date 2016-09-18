<?php
	require '../scripts/funciones.php';
	
  if(! haIniciadoSesion() || ! esAdmin() )
	{
    header('Location: index.php');
	}
	if( isset($_GET['usuario']))
	$usuario = $_GET['usuario'];
	
	else header('Location: ../PanelA.php');
	
	conectar();
	$sedes = getTodasSedes();
	desconectar();


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
		<?php include '/menu-s.php'; ?>

		<div class="container-fluid">
		  <div class="row">
		  <?php include '/menu.php'; ?>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <h1 class="page-header">Panel de Administración</h1>


			  <h4 class="sub-header">Bienvenido, administrador.</h4>
			<p> Se estan modificando los permisos para el usuario: </p><?= $usuario ?>
			
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Edicion de permisos</h3>
            </div>
            <div class="panel-body">
              <form action="../scripts/actualizarp.php" method="POST" >
			  <div class="form-group">
				<label for="exampleInputEmail1"> Usuario</label>
				<input type="text" name="txtUsuario" class="form-control" id="exampleInputEmail1" value="<?= $usuario ?>">
			  </div>
			  <?php foreach ($sedes as $sede): ?>
			  <div class="checkbox">
				<label>
				  <input type="checkbox" name="<?= $sede[0] ?>"> <?= $sede[1] ?>
				</label>
			  </div>
			  <?php endforeach ?>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
            </div>
          </div>
		</div>
		</div>
			</div>
		  </div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>