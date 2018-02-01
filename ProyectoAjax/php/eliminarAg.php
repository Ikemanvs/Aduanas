<?php
//Esta función elimina 
require_once('Conexion.php');
$mi_conexion= new Conexion();
$idAlumno = mysqli_real_escape_string($mi_conexion->conexion,$_REQUEST	['id2']);

//SENTENCIA S1L
$sql="DELETE FROM agenteaduanal WHERE ID = '$idAlumno'";
$resultado = $mi_conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	echo<<<HTML
	<div class = 'container'>
           
                    <h2>Agente aduanal</h2>
            <section id="muestra"> <!--Sección del formulario-->
                <form method = "post" id = "form2" >
                    <div class = 'form-groupp' id='formuEditarAg'>
                        <input type = 'text' class = 'form-control' name = 'nombre' id = "nombre" placeholder = "Nombre"/>
                    </div>
                    <div class = 'form-groupp'>
                        <input type = 'number' class = 'form-control' name = 'apellido' id = "apellido" placeholder = "Teléfono"/>
                    </div>
                    <div class = 'form-groupp'>
                        <input type = 'number' class = 'form-control' name = 'matricula' id = "matricula" placeholder = "Celular"/>
                    </div>
                    <div class = 'form-groupp'>
                        <input type = 'email' class = 'form-control' name = 'grupo' = id ="grupo" placeholder = "Correo"/>
                    </div>
                        <button id = "btnAgente" type = "submit" class = "btn btn-primary crud1">Guardar</button>
                </form>
            </section>
            <article id = "tabla2"> <!--Seccion de la tabla-->
HTML;

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
						<a id = "btnAg$i" href= "php/formuEditarAg.php?id2=$idActual">Editar</a>
						<a id = "btnDeleteAg$i" href="php/eliminarAg.php?id2=$idActual">Eliminar</a>
						</td>
					</tr> 
HTML;
		}
echo <<<HTML
				</tbody>
			</table>
		</article>
	</div>
HTML;

}else{
    echo "Ocurrió un problema al mostrar los datos";
}
?>