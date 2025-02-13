<?php
	sleep(1);
	$conexion = new mysqli("sql102.infinityfree.com","si0_38302815","jr4mU3ntfHy ","if0_38302815_aeropuerto") or ($conexion->error());
	$consulta = $conexion->query("UPDATE avion SET disponible = true");
	if($consulta)
		$exito = '{"exito":1}';
	else
		$exito = '{"exito":0}';

	$conexion->close();
	echo($exito);		
?>