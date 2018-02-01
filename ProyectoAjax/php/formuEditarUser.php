<?php
require_once('Conexion.php');
$conexion= new Conexion();
	$id = $_GET['id4'];
	$sql = "select * from colaborador where ID=$id";
	$fila = $conexion->traerValores($sql);
?>
	<form method="POST" name="formEditarCo" id="formEditarCo">
					<input type="hidden" value="<?php echo $fila['ID'];?>"  id="idad"><br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Nombre'];?>" 		id = "nombre" placeholder = "Nombre de la Aduanas..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['ApellidoP'];?>"	id = "apep"  placeholder = "Direccion..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['ApellidoM'];?>" 		id = "apem"  placeholder = "Nombre de Empresa..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Fecha_Nac'];?>" 		id = "fcn"  placeholder = "Nombre de Ciudad..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['RFC'];?>" 		id = "rfc"  placeholder = "Nombre de pais..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Curp'];?>" 	id = "curp"  placeholder = "Telefono..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Direccion'];?>"	 	id = "direc"  placeholder = "Correo electronico..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Celular'];?>" 		id = "cel" placeholder = "Nombre de la Aduanas..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Telefono'];?>"	id = "tel"  placeholder = "Direccion..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Correo'];?>" 		id = "correo" placeholder = "Nombre de la Aduanas..."/></br>
				    <input type = 'text' class = 'form-control' value="<?php echo $fila['Departamento'];?>" 		id = "depar"  placeholder = "Nombre de Empresa..."/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Puesto'];?>" 		id = "pues"  placeholder = "Nombre de Ciudad..."/></br>
					<input type = 'text' class = 'form-control' value="<?php echo $fila['Password'];?>" 		id = "pass"  placeholder = "Nombre de pais..."/></br>
		<button type="submit">Guardar</button>
	</form>
	