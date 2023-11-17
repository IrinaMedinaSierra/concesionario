<?php
if (isset($_POST['enviar'])){
	echo "entra por enviar <br>";
	if (!empty($_POST['matricula']) && !empty($_POST['bastidor']) && !empty($_POST['marca'])){
		echo "sigue entrando";
		$matricula=$_POST['matricula'];
		$bastidor=$_POST['bastidor'];
		$marca=$_POST['marca'];
		$modelo=$_POST['modelo'];
		$fecha=$_POST['fecha'];
		var_dump($fecha);
		$detalles=$_POST['detalles'];
		$observaciones=$_POST['observaciones'];
		$cilindrada=$_POST['cilindrada'];
		$potencia=$_POST['potencia'];
		$precio=$_POST['precio'];
		$foto=$_POST['foto'];
		$color=$_POST['color'];
		$motor=$_POST['motor'];
		$metalizado=$_POST['metalizado'];
		$descripcion=$_POST['descripcion'];
		include "../servicios/validaciones.php";
		$paso=true;
		if (!validarMatricula($matricula)){
			$paso=false;
			echo "<br>La matrícula no es válida";
		}
		if (!validarBastidor($bastidor)){
			$paso=false;
			echo "<br>El Bastidor no es válido";
		}
		include "../modelo/Vehiculo.php";
		$unVehiculo=new \modelo\Vehiculo($matricula,$bastidor,$marca);
		$unVehiculo->setPotencia($potencia);
		$unVehiculo->setCilindrada($cilindrada);
		$unVehiculo->setExtras($detalles);
		$unVehiculo->setObservaciones($observaciones);
		$unVehiculo->setIdColor($color);
		$unVehiculo->setIdMotor($motor);
		$unVehiculo->setModelo($modelo);
		$unVehiculo->setMetalizado($metalizado);
		$unVehiculo->setUrlFoto($foto);
		$unVehiculo->setPrecio($precio);
		$unVehiculo->setDescripcion($descripcion);
		$unVehiculo->setFechaFabricación($fecha);
		var_dump($unVehiculo);
		if ($paso){
			$consulta="INSERT INTO vehiculo(matricula, bastidor, modelo, cilindrada, potencia, precio, fechaFabricacion, extras, observaciones, foto, descripcion, metalizado, idMotor, idMarca, idColor) values ('$matricula','$bastidor','$modelo','$cilindrada',$potencia, $precio,'$fecha', '$detalles','$observaciones','$foto','$descripcion',$metalizado,$motor,$marca,$color)";
			include "../modelo/conexion.php";
			$link=conectar();
			$resultado=mysqli_query($link,$consulta);
			if ($resultado){
				echo "<br>Se inserto el registro correctamente";
			}else{
				echo "<br>Error: el registro no se insertó";
			}
		}





//	$consulta="insert into vehiculo () values ('$matricula',);";





	}
}else{
echo "no entra";
}















	//
	//	$host=$_SERVER['HTTP_HOST']; //Guarda el nombre de la raiz del dominio o servidor
	//	$ruta=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	//	$archivo="index.php";
	//	$url="http://$host$ruta/$archivo";
	//	echo $url;
	//	//header("Location:$url");
	//	echo "<br>http://localhost:63342/concesionario/index.php";