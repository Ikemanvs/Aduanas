<?php
//Eesta función edita el contenido
require_once('Conexion.php');
$conexion= new Conexion();	

$NombreCola=mysqli_real_escape_string($conexion->conexion,$_POST['vac2']);
$Apemat=mysqli_real_escape_string($conexion->conexion,$_POST['vac3']);
$Apepat=mysqli_real_escape_string($conexion->conexion,$_POST['vac4']);
$fecha=mysqli_real_escape_string($conexion->conexion,$_POST['vac5']);
$rfc=mysqli_real_escape_string($conexion->conexion,$_POST['vac6']);
$curp=mysqli_real_escape_string($conexion->conexion,$_POST['vac7']);
$direc=mysqli_real_escape_string($conexion->conexion,$_POST['vac8']);
$cel=mysqli_real_escape_string($conexion->conexion,$_POST['vac9']);
$tel=mysqli_real_escape_string($conexion->conexion,$_POST['vac10']);
$correo=mysqli_real_escape_string($conexion->conexion,$_POST['vac11']);
$depa=mysqli_real_escape_string($conexion->conexion,$_POST['vac12']);
$area=mysqli_real_escape_string($conexion->conexion,$_POST['vac13']);
$pass=mysqli_real_escape_string($conexion->conexion,$_POST['vac14']);
$idAlumno=mysqli_real_escape_string($conexion->conexion,$_POST['vac1']);

$sql="UPDATE colaborador SET Nombre='$NombreCola',ApellidoP='$Apepat',ApellidoM='$Apemat',Fecha_Nac='$fecha',RFC='$rfc',Curp='$curp',Direccion='$direc',Celular='$cel',Telefono='$tel',Correo='$correo',Departamento='$depa',Puesto='$area' WHERE ID = '$idAlumno'";
$resultado = $conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	echo<<<HTML
	<div class = 'container'>
            <h2>Agente aduanal</h2>
            <section id="muestra"> <!--Sección del formulario-->
                <form method = "post" id = "form4" >
                    <div class = 'form-grouppp' id='formEditarCo'>
                    <h3>Nombre Completo </h3>
						<input type="text" id="nombrecolaborador"  placeholder="Nombre Completo..." required class="form-control" />
						</br>
                    </div>
                    <div class = 'form-groupp'>
                        <h3>Apellido Materno</h3>
						<input type="text" id="ApeMat" placeholder="Apellido Materno..." required class="form-control" />
						</br>
                    </div>
                    <div class = 'form-groupp'>
                        <h3>Apellido Paterno</h3>
						<input type="text" id="ApePat" placeholder="Apellido Paterno..." required class="form-control" />
							</br>
                    </div>
                    <div class = 'form-groupp'>
                       <h3>Fecha Nacimiento</h3>
					<input type="text" id="FechaNac" placeholder="Fecha Nacimiento..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                     <h3>RFC</h3>
						<input type="text" id="rfc" placeholder="RFC..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                      <h3>Curp</h3>
						<input type="text" id="Curp" placeholder="Curp..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                     <h3>Direccion</h3>
					<input type="text" id="Direc" placeholder="Direccion..." required class="form-control" />
					</br>
                    </div>
					
					 <div class = 'form-groupp'>
                      <h3>Celular</h3>
					<input type="text" id="Cel" placeholder="Celular..." required class="form-control" />
					</br>
                    </div>
					
					 <div class = 'form-groupp'>
                       <h3>Telefono</h3>
						<input type="text" id="Tel" placeholder="Telefono..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                       <<h3>Correo</h3>
						<input type="email" id="Corre" placeholder="Correo..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                      <h3>Area Administrativa</h3>
						<input type="text" id="Departamento" placeholder="Departamento..." required class="form-control" />
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                      <h3>Puesto </h3>
						<input type="text" id="Puesto" placeholder="Puesto..." required class="form-control" />
						</br>
                    </div>
					
                        <button id = "btnAgente" type = "submit" class = "btn btn-primary crud1">Guardar</button>
                </form>
            </section>
            <article id = "tabla4"> <!--Seccion de la tabla-->
HTML;
	
	require_once('Conexion.php');
	$conexion2= new Conexion();
    $sql2 = "select * from colaborador;";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion2->seleccionarValores($sql2));  
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
						<a id ="btnCo$i" href= "php/formuEditarUser.php?id4=$idActual">Editar</a>
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