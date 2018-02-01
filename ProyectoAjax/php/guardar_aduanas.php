<?php
require_once('Conexion.php');
$conexion= new Conexion();
$nombres=mysqli_real_escape_string($conexion->conexion,$_POST['vad1']);
$direccions=mysqli_real_escape_string($conexion->conexion,$_POST['vad2']);
$estados=mysqli_real_escape_string($conexion->conexion,$_POST['vad3']);
$ciudads=mysqli_real_escape_string($conexion->conexion,$_POST['vad4']);
$paiss=mysqli_real_escape_string($conexion->conexion,$_POST['vad5']);
$telefonos=mysqli_real_escape_string($conexion->conexion,$_POST['vad6']);
$correos=mysqli_real_escape_string($conexion->conexion,$_POST['vad7']);

$sql="insert into aduanas(Nombre, Direccion, Estado, Ciudad, Pais, Telefono, Correo) 
values('$nombres','$direccions','$estados','$ciudads', '$paiss','$telefonos','$correos');";

$resultado=$conexion->ejecutarConsulta($sql);
if($resultado)
{
	//header("Location:table.php");
require_once('Conexion.php');
$conexion2= new Conexion();
    $sql2 = "select * from aduanas";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion2->seleccionarValores($sql2));  
    $i=0;
	echo<<<HTML
			<table class = 'table table-bordered' id = "tb">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Estado</th>
						<th>Ciudad</th>
						<th>Pais</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id ="info">
HTML;
    foreach($resultadoCons as $datos)
    {
        $idActual=$datos['ID'];
		$nombreActual=$datos['Nombre'];
        $diActual=$datos['Direccion'];
        $esActual=$datos['Estado']; 
        $ciActual=$datos['Ciudad']; 
        $paActual=$datos['Pais']; 
		$teActual=$datos['Telefono']; 
        $coActual=$datos['Correo']; 
		$i++;
    echo <<<HTML
					<tr>
						<td>$idActual</td>
						<td>$nombreActual</td>
						<td>$diActual</td>
						<td>$esActual</td>
						<td>$ciActual</td>
						<td>$paActual</td>
						<td>$teActual</td>
						<td>$coActual</td>
						<td>
						<a id ="btnAd$i" href= "php/formuEditarAdu.php?id3=$idActual">Editar</a>
						<a id ="btnDeleteAd$i" href="php/eliminarAd.php?id3=$idActual">Eliminar</a>
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