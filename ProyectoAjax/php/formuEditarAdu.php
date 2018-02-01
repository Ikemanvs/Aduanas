<?php
require_once('Conexion.php');
$conexion= new Conexion();
	$id = $_GET['id3'];
	$sql = "select * from aduanas where ID=$id";
	$fila = $conexion->traerValores($sql);
?>


	<form method="POST" name="formuEditarAd" id="formEditarAd">
					<input type="hidden" value="<?php echo $fila['ID'];?>" placeholder="<?php echo $fila['nombre'];?>" id="idad"><br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Nombre'];?>" 		id = "nombre" placeholder = "Nombre de la Aduanas..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Direccion'];?>"	id = "direccion"  placeholder = "Direccion..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Estado'];?>" 		id = "estado"  placeholder = "Nombre de Empresa..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Ciudad'];?>" 		id = "ciudad"  placeholder = "Nombre de Ciudad..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Pais'];?>" 		id = "pais"  placeholder = "Nombre de pais..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Telefono'];?>" 	id = "telefono"  placeholder = "Telefono..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Correo'];?>"	 	id = "correo"  placeholder = "Correo electronico..."/></br>
		<button type="submit">Guardar</button>
	</form>