<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombreAc'],
		$_POST['tipoAc'],
		$_POST['fechalanzamientoAc'],
		$_POST['descripcionAc'],
		$_POST['idjuego']
				);

	echo $obj->actualizar($datos);
	

 ?>