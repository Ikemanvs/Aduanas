<?php
require_once('Conexion.php');
$conexion=new Conexion();
if($_REQUEST['cod']>=1)
	$va1=$_REQUEST['cod'];
	$va2=$_REQUEST['cod2'];
	$va3=$_REQUEST['cod3'];
	$va4=$_REQUEST['cod4'];
	$va5=$_REQUEST['cod5'];
	$va6=$_REQUEST['cod6'];
	$va7=$_REQUEST['cod7'];
	$va8=$_REQUEST['cod8'];
echo <<<HTML
<form id="Aduanas" method="post" action="php/actAtu.php">
	<input type="text" id="ID"  placeholder="Id de aduana..." value="$va1" required class="form-control" />
	</br>
	<input type="text" id="nombre"  placeholder="Nombre de aduana..." value="$va2" required class="form-control" />
	</br>
	<input type="text" id="direccion"  placeholder="Direccion de aduana..." value="$va3" required class="form-control" />
	</br>
	<input type="text" id="estado" placeholder="Estado de aduana..." value="$va4" required class="form-control" />
	</br>
	<input type="text" id="ciudad"  placeholder="Ciudad de aduana..." value="$va5" required class="form-control" />
	</br>
	<input type="text" id="pais"  placeholder="Pais de aduana..." value="$va6" required class="form-control" />
	</br>
	<input type="tel" id="telefono"  placeholder="Telefono de aduana..." value="$va7" required class="form-control" />
	</br>
	<input type="email" id="correo"  placeholder="Correo de aduana..." value="$va8" required class="form-control" />
	</br>
	<button id="btn1u" type="submit" class="btn btn-warning" >Actualizar Aduanas</button>
	<button id="btn2u" type="submit"  class="btn btn-success"  >Eliminar Aduanas</button>
	<button id="btn3u" type="submit" value="formu3.php" class="btn btn-success">Agregar Alumno Nuevo</button>

	</form>
HTML;
$sql2="select * from aduanas where status=1;";
    echo <<<HTML
   <table id="tabla1">
	<tr  id="tr1">
      <td >#</td>
      <td >Nombre</td>
      <td >Direccion</td>
      <td >Estado</td>
      <td >Ciudad</td>
	  <td >Pais</td>
	  <td >Telefono</td>
	  <td >Correo</td>
	  <td >Opciones</td>
    </tr>
HTML;
		$resultado2=array_filter($conexion->seleccionarValores($sql2));
    	$i=0;
    	foreach($resultado2 as $datos){

    		$id=$datos['ID'];
    		$Nombre=$datos['Nombre'];
    		$Direccion=$datos['Direccion'];
			$Estado=$datos['Estado'];
			$Ciudad=$datos['Ciudad'];
			$Pais=$datos['Pais'];
    		$Telefono=$datos['Telefono'];
			$Correo=$datos['Correo'];
    		$i++;
echo <<<HTML
				<tr id="tr1">
				<td>$id</td>
				<td>$Nombre</td>
				<td>$Direccion</td>
				<td>$Estado</td>
				<td>$Ciudad</td>
				<td>$Pais</td>
				<td>$Telefono</td>
				<td>$Correo</td>
				<td><a  id="enlab$i" href="php/formuadu2.php?cod=$id&cod2=$Nombre&cod3=$Direccion&cod4=$Estado&cod5=$Ciudad&cod6=$Pais&cod7=$Telefono&cod8=$Correo" class="btn btn-primary mb-2">Modificar</a>		
				</td>
				</tr>
HTML;
				}
				echo <<<HTML
						   </table>
HTML;
?>