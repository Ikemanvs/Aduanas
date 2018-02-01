<?php
//Esta función elimina 
require_once('Conexion.php');
$mi_conexion= new Conexion();
$idAlumno = mysqli_real_escape_string($mi_conexion->conexion,$_REQUEST	['id3']);

//SENTENCIA S1L
$sql="DELETE FROM aduanas WHERE ID = '$idAlumno'";
$resultado = $mi_conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	echo<<<HTML
<div class = 'container'>
    <h2>Importaciones</h2>
    <section id="muestra"> <!--Sección del formulario-->
    <form method = "post" id = "forma" >
	<div class = 'form-grouppp' id='formEditarAd'>
	<input type="text" id="nombre"  placeholder="Nombre de aduana..." required class="form-control" />
	</br>
	 </div>
	 <div class = 'form-grouppp'>
       <input type="text" id="direccion"  placeholder="Direccion de aduana..." required class="form-control" />
	</br>
      </div>
	<div class = 'form-grouppp'>
       <input type="text" id="estado" placeholder="Estado de aduana..." required class="form-control" />
	</br>
      </div>
	<div class = 'form-grouppp'>
       <input type="text" id="ciudad"  placeholder="Ciudad de aduana..." required class="form-control" />
	</br>
      </div>
	<div class = 'form-grouppp'>
       <input type="text" id="pais"  placeholder="Pais de aduana..." required class="form-control" />
	</br>
      </div>
	
	<div class = 'form-grouppp'>
       <input type="tel" id="telefono"  placeholder="Telefono de aduana..." required class="form-control" />
	</br>
      </div>
	<div class = 'form-grouppp'>
      <input type="email" id="correo"  placeholder="Correo de aduana..." required class="form-control" />
	</br> 
      </div>
	
	<div class = 'form-grouppp'>
       <button id="btnAd" type="submit"  class = "btn btn-primary crud1" >Agregar Aduanas</button>
      </div>
	</form>   
            </section>
            <article id = "tabla3"> <!--Seccion de la tabla-->
HTML;

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