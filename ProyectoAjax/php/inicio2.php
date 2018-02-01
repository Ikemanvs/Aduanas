<?php
echo <<<HTML
<form id="formulario" >
		<input type="email" id="user" name="user" placeholder="User" required  autofocus class="form-control" />	
		</br>
		<input type="password" id="pass" name="pass" placeholder="Password" required class="form-control" />
			</br>
		<button id="login" value="php/inicio.php" class="btn btn-primary mb-2" >Inicio</button>
		</form>
HTML;



?>