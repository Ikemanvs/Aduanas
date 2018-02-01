<?php
require_once('Conexion.php');
$conexion=new Conexion();
if($_REQUEST['cod']==1){
	echo <<<HTML
	 <div class = 'container'>
            <h2>Importaciones</h2>
            <section id="muestra"> <!--Sección del formulario-->
              <form method = "post" id = "form" >
                    <div class = 'form-group' id='formEditar'>
                        <input type = 'text' class = 'form-control' name = 'nombreImp' class="form-control"  id = "nombreImp" placeholder = "Nombre de la importación"/>
                    </div>
                    <div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreCola' class="form-control" id = "nombreCola" placeholder = "Nombre del Colaborador"/>
                    </div>
                    <div class = 'form-group'>
                        <label>Fecha Inicial</label>
                        <input type = 'date' class = 'form-control' class="form-control" name = 'fechInicio' id = "fechInicio" required />
                    </div>
					<div class = 'form-group'>
                        <label>Fecha Final</label>
                        <input type = 'date' class = 'form-control' class="form-control" name = 'fechFinal' id = "fechFinal" required />
                    </div>
                    <div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'nombreEmpre' = id ="nombreEmpre" placeholder = "Nombre de la Empresa"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' class="form-control" name = 'costoImport' = id ="costoImport" placeholder = "Costo de la importación"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' class="form-control" name = 'diasProceso' = id ="diasProceso" placeholder = "Días de proceso"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control'  class="form-control" name = 'nombreAgencia' = id ="nombreAgencia" placeholder = "Nombre de la Agencia"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' class="form-control" name = 'montoTransf' = id ="montoTransf" placeholder = "Monto transferido"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'dirAlmacen' = id ="dirAlmacen" placeholder = "Dirección del almacén"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'nombreAgente' = id ="nombreAgente" placeholder = "Nombre del Agente"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'nombreAduan' = id ="nombreAduan" placeholder = "Nombre de la Aduana"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'verific' = id ="verific" placeholder = "Verificación"/>
                    </div>
					<div class = 'form-group'>
                        <label >Fecha de carga</label>
                        <input type = 'date' class = 'form-control' class="form-control" name = 'fechaCarg' = id ="fechaCarg" required />
                    </div>
					<div class = 'form-group'>
                        <label >Fecha de salida</label>
                        <input type = 'date' class = 'form-control' class="form-control" name = 'fechaSalida' = id ="fechaSalida" required />
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'nomTranspor' = id ="nomTranspor" placeholder = "Nombre del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'tipoTranspor' = id ="tipoTranspor" placeholder = "Tipo del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'costoTranspor' = id ="costoTranspor" placeholder = "Costo del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'tiempoImport' = id ="tiempoImport" placeholder = "Tiempo de Importación"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'inicio' = id ="inicio" placeholder = "Inicio"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control"  name = 'cierre' = id ="cierre" placeholder = "Cierre"/>
                    </div>
					<div class = 'form-group'>
                        <label>Fecha de Entrega</label>
                        <input type = 'date' class = 'form-control' class="form-control" name = 'fechEntrega' = id ="fechEntrega" required />
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' class="form-control" name = 'nomRecibio' = id ="nomRecibio" placeholder = "Nombre del que recibió"/>
                    </div>
                        <button id = "btn1" type = "submit" class = "btn btn-primary crud1">Guardar</button>
                </form>
               
            </section>
            <article id = "tabla"> <!--Seccion de la tabla-->
                
            </article>
        </div>

HTML;
}
if($_REQUEST['cod']==2){
		echo <<<HTML
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
                
            </article>
        </div>
HTML;
}

if($_REQUEST['cod']==3){
		echo <<<HTML
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

       <button id="btnAd" type="submit"  class = "btn btn-primary crud1" >Agregar Aduanas</button>
  
	</form>   
            </section>
            <article id = "tabla3"> <!--Seccion de la tabla-->
                
            </article>
        </div>
HTML;

}
if($_REQUEST['cod']==4){
		echo <<<HTML
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
                
            </article>
        </div>
HTML;
}

if($_REQUEST['cod']==5){
		echo <<<HTML
	<h2>dato5</h2>
HTML;
}

?>