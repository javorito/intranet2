<?php
	require 'funciones.php';
	$usuario = $_POST['txtUsuario'];
	$clave = $_POST['txtClave'];
	conectar();
	
	if(validarLogin($usuario, $clave) ){
		//Acccedemos al sistema
		if( esAdmin() )
			header('Location: ../PanelA.php');
		else header('Location: ../PanelU.php');
		
	}else{
		
		//Sino volvemos al formulario inicial
		
	
?>

<script>
alert('los datos ingresados son incorrectos.')
location.href="../index.php";
</script>
<?php
desconectar();
}
?>