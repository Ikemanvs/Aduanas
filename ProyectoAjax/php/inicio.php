<?php 
require_once('Conexion.php');
$conexion= new Conexion();
$user=mysqli_real_escape_string($conexion->conexion,$_POST['v1']);
$pass=mysqli_real_escape_string($conexion->conexion,$_POST['v2']);
$sql="select Correo, Password,Puesto from colaborador where Correo='$user' and Password='$pass'";

$resultado=array_filter($conexion->seleccionarValores($sql));
    	$i=0;
		
    	foreach($resultado as $datos){

    		$correo=$datos['Correo'];
    		$contrasena=$datos['Password'];
			$puesto=$datos['Puesto'];
    		$i++;
if($correo == $user and $contrasena == $pass and $puesto=="Admin"){
echo <<<HTML
		<div id="menu">
		<a  id="enla1" href="php/menu.php?cod=1">Importaciones</a>
		<a  id="enla2" href="php/menu.php?cod=2">Agentes aduanales</a>
		<a  id="enla3" href="php/menu.php?cod=3">Aduanas</a>
		<a  id="enla4" href="php/menu.php?cod=4">Usuarios</a>
	</div>
	<button id="botonS" value="php/inicio2.php">Salir</button>
HTML;
}elseif($correo == $user and $contrasena == $pass and $puesto=="User"){
	echo <<<HTML
		<div id="menu">
		<a  id="enlac1" href="php/menu2.php?cod2=1">Importaciones</a>
		<a  id="enlac2" href="php/menu2.php?cod2=2">Agentes aduanales</a>
		<a  id="enlac3" href="php/menu2.php?cod2=3">Aduanas</a>
	</div>
		<button id="botonS" value="php/inicio2.php" >Salir</button>
HTML;
}
    	}
		if(!$resultado){
			echo <<<HTML
		<h2 id="Error">Revisa Porfavor tu usuario y Contraseña</h2>;
	<div  id="principal">
	<!--esto es la cabeza del formaulario-->
		<form id="formulario" method="post" action="php/inicio.php" >
		<input type="email" id="user" name="user" placeholder="User" required  autofocus class="form-control" />	
		</br>
		<input type="password" id="pass" name="pass" placeholder="Password" required class="form-control" />
			</br>
		<button id="login"  class="btn btn-primary mb-2" >Inicio</button>
		</form>
	</div>
HTML;
		}

?>