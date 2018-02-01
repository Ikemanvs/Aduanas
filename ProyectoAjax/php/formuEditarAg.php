<?php
	require_once('Conexion.php');
	$conexion= new Conexion();
	$id = $_GET['id2'];
	$sql = "select * from agenteaduanal where ID=$id";
	$fila = $conexion->traerValores($sql);
?>
	<form method="POST" name="formuEditarAg" id="formuEditarAg">
	
		<input type="hidden" value="<?php echo $fila['ID'];?>" placeholder="<?php echo $fila['nombre'];?>" id="id1"><br>
		<label>Nombre</label><br>
		<input type="text" class = 'form-control' value="<?php echo $fila['NombreAgente'];?>"  name="nombre" id="nombre1"  required><br>
		<label>Teléfono</label><br>
		<input type="number" class = 'form-control' value="<?php echo $fila['Telefono'];?>"  name="apellido" id="apellido1"  required><br>
		<label>Celular</label><br>
		<input type="number" class = 'form-control' value="<?php echo $fila['Celular'];?>" name="matri" id="grado1"  required><br>
		<label>Correo</label><br>
		<input type="email" class = 'form-control' value="<?php echo $fila['Correo'];?>"  name="grupo" id="grupo1"  required><br>
		<button type="submit">Guardar</button>
		
	</form>