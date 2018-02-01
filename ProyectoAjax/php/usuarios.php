<?php
require_once('Conexion.php');
$conexion= new Conexion();	

$NombreCola=mysqli_real_escape_string($conexion->conexion,$_POST['vac1']);
$Apemat=mysqli_real_escape_string($conexion->conexion,$_POST['vac2']);
$Apepat=mysqli_real_escape_string($conexion->conexion,$_POST['vac3']);
$fecha=mysqli_real_escape_string($conexion->conexion,$_POST['vac4']);
$rfc=mysqli_real_escape_string($conexion->conexion,$_POST['vac5']);
$curp=mysqli_real_escape_string($conexion->conexion,$_POST['vac6']);
$direc=mysqli_real_escape_string($conexion->conexion,$_POST['vac7']);
$cel=mysqli_real_escape_string($conexion->conexion,$_POST['vac8']);
$tel=mysqli_real_escape_string($conexion->conexion,$_POST['vac9']);
$correo=mysqli_real_escape_string($conexion->conexion,$_POST['vac10']);
$depa=mysqli_real_escape_string($conexion->conexion,$_POST['vac11']);
$area=mysqli_real_escape_string($conexion->conexion,$_POST['vac12']);
$pass=mysqli_real_escape_string($conexion->conexion,$_POST['vac13']);

$sql="insert into colaborador (Nombre,ApellidoP,ApellidoM,Fecha_Nac,RFC,Curp,Direccion,Celular,Telefono,Correo,Departamento,Puesto,Password)
VALUES ('$NombreCola','$Apepat','$Apemat','$fecha','$rfc','$curp','$direc','$cel','$tel','$correo','$depa','$area','$pass')";

$resultado=$conexion->ejecutarConsulta($sql);	

if($resultado){
	//header("Location:table.php");
require_once('Conexion.php');
$conexion= new Conexion();
    $sql = "select * from colaborador;";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion->seleccionarValores($sql));  
    $i=0;
	echo<<<HTML
			<table class = 'table table-bordered' id = "tb">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>RFC</th>
						<th>Curp</th>
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
        $nombreActual=$datos['Nombre'];
        $rfcActual=$datos['RFC']; 
        $curpActual=$datos['Curp']; 
        $celularActual=$datos['Celular'];
		$correoActual=$datos['Correo'];		
		$i++;
    echo <<<HTML
					<tr>
						<td>$idActual</td>
						<td>$nombreActual</td>
						<td>$rfcActual</td>
						<td>$curpActual</td>
						<td>$celularActual</td>
						<td>$correoActual</td>
						<td>
						<a id ="btnCo2$i" href= "php/formuEditarUser.php?id4=$idActual">Editar</a>
						<a id ="btnDeleteCo$i" href="php/EliminarUser.php?id4=$idActual">Eliminar</a>
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