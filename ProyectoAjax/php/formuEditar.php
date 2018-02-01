<?php
require_once('Conexion.php');
$conexion= new Conexion();
	$id = $_GET['id'];
	$sql = "select * from procesoimportacion where ID=$id";
	$fila = $conexion->traerValores($sql);
?>

	<form method="POST" name="formuEditar" id="formEditar">
		<div class = 'form-group' id='formEditar'>
					<input type="hidden" value="<?php echo $fila['ID'];?>" placeholder="<?php echo $fila['nombre'];?>" id="id1"><br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreImport'];?>" name = 'nombreImp' id = "nombreImp" placeholder = "Nombre de la importación"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreCola'];?>" name = 'nombreCola' id = "nombreCola" placeholder = "Nombre de Colaborador"/></br>
                    <label>Fecha Inicial</label>
                    <input type = 'date' class = 'form-control' name = 'fechInicio' id = "fechInicio"/></br>
                    <label>Fecha Final</label>
                    <input type = 'date' class = 'form-control' name = 'fechFinal' id = "fechFinal"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreEmp'];?>" name = 'nombreEmpre' = id ="nombreEmpre" placeholder = "Nombre de la empresa"/></br>
                    <input type = 'number' class = 'form-control' value="<?php echo $fila['CostoImp'];?>" name = 'costoImport' = id ="costoImport" placeholder = "Costo de la importación"/></br>
					<input type = 'number' class = 'form-control' value="<?php echo $fila['DiasPro'];?>" name = 'diasProceso' = id ="diasProceso" placeholder = "Días de proceso"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreAgecia'];?>" name = 'nombreAgencia' = id ="nombreAgencia" placeholder = "Nombre de la Agencia"/></br>
                    <input type = 'number' class = 'form-control' value="<?php echo $fila['MontoTrans'];?>" name = 'montoTransf' = id ="montoTransf" placeholder = "Monto transferido"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['DireccionAlma'];?>" name = 'dirAlmacen' = id ="dirAlmacen" placeholder = "Dirección del almacén"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreAgente'];?>" name = 'nombreAgente' = id ="nombreAgente" placeholder = "Nombre del Agente"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreAduana'];?>" name = 'nombreAduan' = id ="nombreAduan" placeholder = "Nombre de la Aduana"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Verificacion'];?>" name = 'verific' = id ="verific" placeholder = "Verificación"/></br>
                    <label>Fecha de carga</label></br>
                    <input type = 'date' class = 'form-control' name = 'fechaCarg' = id ="fechaCarg"/></br>
                    <label>Fecha de salida</label></br>
                    <input type = 'date' class = 'form-control' name = 'fechaSalida' = id ="fechaSalida"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreTransporte'];?>" name = 'nomTranspor' = id ="nomTranspor" placeholder = "Nombre del transporte"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['TipoTrans'];?>" name = 'tipoTranspor' = id ="tipoTranspor" placeholder = "Tipo del transporte"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['MontoCostoTrans'];?>" name = 'costoTranspor' = id ="costoTranspor"/ placeholder = "Costo del transporte"></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['TiempoImport'];?>" name = 'tiempoImport' = id ="tiempoImport"/ placeholder = "Tiempo de Importación"></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Inicio'];?>" name = 'inicio' = id ="inicio" placeholder = "Inicio"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['Cierre'];?>" name = 'cierre' = id ="cierre" placeholder = "Cierre"/></br>
                    <label>Fecha de Entrega</label></br>
                    <input type = 'date' class = 'form-control' name = 'fechEntrega' = id ="fechEntrega"/></br>
                    <input type = 'text' class = 'form-control' value="<?php echo $fila['NombreRecibio'];?>" name = 'nomRecibio' = id ="nomRecibio" placeholder = "Nombre del que recibió"/></br>
		<button type="submit">Guardar</button>
	</form>