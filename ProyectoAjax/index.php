<!DOCTYPE html>
<html>
	<head>
	<title>Sistema Gestor de Aduanas</title>
	<link rel="stylesheet"  type="text/css" href="css/stiloi.css" />
	<link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css">
	<script src="js/funcioness.js"></script>
	</head>
	
	<body >
	<img id="imagen" src="img/imgP.jpg"/>
	<div id="mensaje">
	</div>
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
	<div id="infoGeneral">
	<div id="mensaje2">
	</div>
	<div id="mensaje3">
	</div>
	</div>
	
	<div id="infoGeneral2">
	<div id="mensaje2">
	</div>
	<div id="mensaje3">
	</div>
	</div>
	
	</body>
	
	<footer>
	</footer>
</html>