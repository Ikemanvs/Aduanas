<?php
//GUARDAR INFORMACIÓN EN LA BASE DE DATOS
require_once('Conexion.php');
$mi_conexion= new Conexion();
$nombre = mysqli_real_escape_string($mi_conexion->conexion,$_POST['nombre']);
$apellido = mysqli_real_escape_string($mi_conexion->conexion,$_POST['apellido']);
$matricula = mysqli_real_escape_string($mi_conexion->conexion,$_POST['matricula']);
$grupo = mysqli_real_escape_string($mi_conexion->conexion,$_POST['grupo']);

//SENTENCIA S1L
$sql="INSERT INTO agenteaduanal(NombreAgente,Telefono,Celular,Correo) 
VALUES ('$nombre','$apellido','$matricula','$grupo');";
$resultado = $mi_conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	//header("Location:table.php");
require_once('Conexion.php');
$conexion= new Conexion();
    $sql = "select * from agenteaduanal;";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion->seleccionarValores($sql));  
    $i=0;
	echo<<<HTML
			<table class = 'table table-bordered' id = "tb">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Teléfono</th>
						<th>Celular</th>
						<th>Correo</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id ="info">
HTML;
    foreach($resultadoCons as $datos)
    {
        $idActual=$datos['ID'];
        $nombreActual=$datos['NombreAgente'];
        $apellidoActual=$datos['Telefono']; 
        $MatriculaActual=$datos['Celular']; 
        $grupoActual=$datos['Correo']; 
		$i++;
    echo <<<HTML
					<tr>
						<td>$idActual</td>
						<td>$nombreActual</td>
						<td>$apellidoActual</td>
						<td>$MatriculaActual</td>
						<td>$grupoActual</td>
						<td>
						<a id ="btnAg$i" href= "php/formuEditarAg.php?id2=$idActual">Editar</a>
						<a id ="btnDeleteAg$i" href="php/eliminarAg.php?id2=$idActual">Eliminar</a>
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