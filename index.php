<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <div>
	<form action="">









		<select name="motor" id="motor">
			<option value="">Seleccione Motor</option>
			<?php
				include "conexion.php";
				$link=conectar ();
				$consMotores="select * from motor";
                $resultado=mysqli_query($link,$consMotores);
				while($fila=mysqli_fetch_assoc($resultado)){
					echo "<option  value=" . $fila['id'] . ">" . $fila['tipoMotor'] . "</option>";
                }
			?>
		</select>

		
		
	</form>
    </div>
</head>
<body>

</body>
</html>

<?php
