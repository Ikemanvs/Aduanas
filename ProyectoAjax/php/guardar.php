<?php
//GUARDAR INFORMACIÓN EN LA BASE DE DATOS
require_once('Conexion.php');
$mi_conexion= new Conexion();
$nombreImp = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va1']);
$nombreCola = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va2']);
$fechInicio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va3']);
$fechFinal = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va4']);
$nombreEmpre = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va5']);
$costoImport = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va6']);
$diasProceso = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va7']);
$nombreAgencia = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va8']);
$montoTransf = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va9']);
$dirAlmacen = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va10']);
$nombreAgente = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va11']);
$nombreAduan = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va12']);
$verific = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va13']);
$fechaCarg = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va14']);
$fechaSalida = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va15']);
$nomTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va16']);
$tipoTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va17']);
$costoTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va18']);
$tiempoImport = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va19']);
$inicio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va20']);
$cierre = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va21']);
$fechEntrega = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va22']);
$nomRecibio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va23']);

//SENTENCIA S1L
$sql="INSERT INTO procesoimportacion (NombreImport,NombreCola,FechaI,FechaF,NombreEmp,CostoImp,DiasPro,NombreAgecia,MontoTrans,DireccionAlma,NombreAgente,NombreAduana,Verificacion,FechaCarga,FechaSalida,NombreTransporte,TipoTrans,MontoCostoTrans,TiempoImport,Inicio,Cierre,FechaEntrega,NombreRecibio) 
VALUES ('$nombreImp','$nombreCola','$fechInicio','$fechFinal','$nombreEmpre','$costoImport','$diasProceso','$nombreAgencia','$montoTransf','$dirAlmacen','$nombreAgente','$nombreAduan','$verific','$fechaCarg','$fechaSalida','$nomTranspor','$tipoTranspor','$costoTranspor','$tiempoImport','$inicio','$cierre','$fechEntrega','$nomRecibio')";

$resultado = $mi_conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	//header("Location:table.php");
require_once('Conexion.php');
$conexion= new Conexion();
    $sql = "select ID,FechaI,FechaF,MontoTrans from procesoimportacion;";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion->seleccionarValores($sql));  
    $i=0;
	echo<<<HTML
			<table class="table table-responsive" id = "tb">
				<thead>
					<tr>
						<th>#</th>
						<th>Fecha inicio</th>
						<th>Fecha Final</th>
						<th>Costo Importación</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id ="info">
HTML;
    foreach($resultadoCons as $datos)
    {
        $idActual=$datos['ID']; 
        $fechInicioActual=$datos['FechaI'];
		$fechFinalActual=$datos['FechaF'];
		$montoTransfActual=$datos['MontoTrans'];
        $i++;
    echo <<<HTML
					<tr>
						<td>$idActual</td>
						<td>$fechInicioActual</td>
						<td>$fechFinalActual</td>
						<td>$montoTransfActual</td>
						<td>
						<a id = "btnEdit$i" href= "php/formuEditar.php?id=$idActual">Editar</a>
						<a id = "btnDelete$i" href="php/eliminar.php?id=$idActual">Eliminar</a>
						</td>
					</tr> 
HTML;
		}
echo <<<HTML
		</tbody>
	</table>
HTML;
} 
//SINO SE EJECUTA LA CONSULTA
else{
	echo "Ocurrió un problema al mostrar los datos";
}
?>