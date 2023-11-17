<?php
	$servidor="localhost:3306";
	$user="root";
	$pass="Qzec7139.";
	$bbdd="concesionario";

	function conectar(){
		global $servidor,$user,$pass,$bbdd;
		$link=mysqli_connect($servidor,$user,$pass,$bbdd);
		if (mysqli_error($link)){
			$msn= "Existe un error al conectar con el servidor o BBDD";
			
		}else{
			$msn= "Conexión establecida correctamente";
		}
		return $link;
	}

