<?php
	$conexion = null;
	$respuesta = null;

	function conectar()
	{
	global $conexion;
	$conexion = mysqli_connect('localhost', 'root', '', 'intranet');
	mysqli_set_charset($conexion, 'utf8');
	
	}
	
	function getTodasSedes(){
	global $conexion;
	global $respuesta;
	$respuesta = mysqli_query($conexion, "SELECT * FROM sedes");
	return $respuesta->fetch_all();	
	}

	function getSedesPorUser(){
	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT S.sedes, S.descripcion, S.ruta FROM permisos P INNER JOIN sedes S ON P.ID_Sede = S.ID_Sede WHERE usuario='".$_SESSION['usuario']."'");
	return $respuesta->fetch_all();	
	}
	
	function getUsuarios(){
	global $conexion;
	$respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE admin<>1");
	return $respuesta->fetch_all();	
	$correo=$respuesta['correo'];
	
	}
	

	
	function validarLogin($usuario, $clave)
	{
		global $conexion;
		$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND clave='".$clave."'";
		$respuesta = mysqli_query($conexion, $consulta);
		
		if( $fila = mysqli_fetch_row($respuesta) )
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['admin'] = $fila[2];
			return true;
		}
		return false;
	}

	

	function haIniciadoSesion()
	{
		session_start();
		return isset( $_SESSION['usuario'] );
	}

	function esAdmin()
	{
		return $_SESSION['admin'];
	}
	
	function desconectar(){
		global $conexion;
		mysqli_close($conexion);	
	}
	



?>