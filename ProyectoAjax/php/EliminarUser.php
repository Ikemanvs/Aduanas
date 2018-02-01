<?php
//Esta función elimina 
require_once('Conexion.php');
$mi_conexion= new Conexion();
$idAlumno = mysqli_real_escape_string($mi_conexion->conexion,$_REQUEST	['id4']);

//SENTENCIA S1L
$sql="DELETE FROM colaborador WHERE ID = '$idAlumno'";
$resultado = $mi_conexion->ejecutarConsulta($sql);

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
					<input type="date" id="FechaNac" placeholder="Fecha Nacimiento..." required class="form-control" />
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
                       <h3>Correo</h3>
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
						<SELECT id="Puesto" class="form-control"> 
							<OPTION VALUE="Admin">Administrador</OPTION>
							<OPTION VALUE="User">Usuario</OPTION>
							</SELECT> 
						</br>
                    </div>
					
					 <div class = 'form-groupp'>
                      <h3>Password </h3>
						<input type="text" id="Pass" placeholder="Password..." required class="form-control" />
						</br>
                    </div>
					
                        <button id = "btnCo" type = "submit" class = "btn btn-primary crud1">Guardar</button>
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
						<a id ="btnCo$i" href="php/formuEditarUser.php?id4=$idActual">Editar</a>
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