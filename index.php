<?php
	include "modelo/conexion.php";
	$link=conectar();
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vista/css/style.css">
    <title>Document</title>
    <div  class="caja-negra">
        <img src="vista/img/quatre-rodes.png" alt="Logo">
        <h2 class="numeros">Alta de Vehículos</h2>
    </div>
    <div class="caja-blanca">

        <form  class="formulario" action="controlador/controlador.php" method="post">
        <div class="input-izquierda">
            <input type="text" placeholder="Matricula" name="matricula">
            <input type="text" placeholder="Bastidor" name="bastidor" MAXLENGTH="12">
            <input type="text" placeholder="Modelo" name="modelo">

            <input type="date" name="fecha">
            <textarea placeholder="Descripción" name="descripcion"></textarea>
            <textarea placeholder="Detalles" name="detalles"></textarea>
            <textarea placeholder="Observaciones" name="observaciones"></textarea>
        </div>
        <div class="input-derecha">
            <input type="text" placeholder="Cilindrada" name="cilindrada">
            <input type="number" placeholder="potencia" name="potencia">
            <input type="number" placeholder="Precio" name="precio">
            <input type="file"  name="foto">
            <select name="marca" id="marca">
                <option value="">Seleccione la Marca</option>
                <?php

                    $consMotores="select * from marca";
                    $resultado=mysqli_query($link,$consMotores);
                    while($fila=mysqli_fetch_assoc($resultado)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['nombreMarca'] . "</option>";
                    }
                    mysqli_free_result($resultado);
                ?>
            </select>
            <select name="color" id="color">
                <option value="">Seleccione el Color</option>
                <?php

	                $link=conectar ();
                    $consMotores="select * from color";
                    $resultado=mysqli_query($link,$consMotores);
                    while($fila=mysqli_fetch_assoc($resultado)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['nombreColor'] . "</option>";
                    }
                    mysqli_free_result($resultado);
                ?>
            </select>

            <select name="motor" id="motor">
                <option value="">Seleccione Motor</option>
                <?php
	                $link=conectar ();
                    $consMotores="select * from motor";
                    $resultado=mysqli_query($link,$consMotores);
                    while($fila=mysqli_fetch_assoc($resultado)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['tipoMotor'] . "</option>";
                    }
                    mysqli_free_result($resultado);
                ?>
            </select>
           <select name="metalizado">
               <option value="">Metalizado</option>
               <option value="1">Si</option>
               <option value="0">No</option>
           </select>

    </div>
            <div class="acciones">
     <p class="centrado">
            <input type="submit" value="Enviar" class="boton" name="enviar">
    </p>
            </div>
    </div>
	</form>

</head>
<body>
</body>
</html>
