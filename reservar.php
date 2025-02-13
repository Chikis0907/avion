<?php
	
	$asiento = $_POST['asiento'];
	$conexion = new mysqli("sql102.infinityfree.com","si0_38302815","jr4mU3ntfHy ","if0_38302815_aeropuerto");
	$actualiza = $conexion->query("UPDATE avion SET disponible = false WHERE asiento = $asiento");
	if($actualiza)//
		$exito = '{"exito":1,"asiento":'.$asiento.'}';
	else
		$exito = '{"exito":0}';
	$conexion->close();
    //$dato='[{"nombre":"'.$nombre.'","edad":'.$edad.',"sexo":"'.$mascu.'"]}'; 
    
	echo($exito);	 		
?>