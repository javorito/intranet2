<?php
	require 'funciones.php';
	
  if(! haIniciadoSesion() || ! esAdmin() )
	{
    header('Location: index.php');
	}
	if( isset($_POST['txtUsuario']))
	$usuario = $_POST['txtUsuario'];
	
	else header('Location: ../PanelA.php');
	
	conectar();
	$categorias = getTodasSedes();
	desconectar();


?>