<?php
//Eesta función edita el contenido
require_once('Conexion.php');
$mi_conexion= new Conexion();

$nombreImp = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va1']);
$nombreCola = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va2']);
$fechInicio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va3']);
$fechFinal = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va4']);
$nombreEmpre = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va5']);
$costoImport = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va6']);
$diasProceso = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va7']);
$nombreAgencia = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va8']);
$montoTransf = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va9']);
$dirAlmacen = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va10']);
$nombreAgente = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va11']);
$nombreAduan = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va12']);
$verific = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va13']);
$fechaCarg = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va14']);
$fechaSalida = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va15']);
$nomTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va16']);
$tipoTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va17']);
$costoTranspor = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va18']);
$tiempoImport = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va19']);
$inicio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va20']);
$cierre = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va21']);
$fechEntrega = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va22']);
$nomRecibio = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va23']);
$idImport = mysqli_real_escape_string($mi_conexion->conexion,$_POST['va0']);

$sql="UPDATE procesoimportacion SET NombreImport = '$nombreImp', NombreCola = '$nombreCola', FechaI = '$fechInicio', FechaF = '$fechFinal', NombreEmp = '$nombreEmpre', CostoImp = '$costoImport', DiasPro = '$diasProceso', NombreAgecia = '$nombreAgencia', MontoTrans = '$montoTransf', DireccionAlma = '$dirAlmacen', NombreAgente = '$nombreAgente', NombreAduana= '$nombreAduan', Verificacion = '$verific', FechaCarga = '$fechaCarg', FechaSalida = '$fechaSalida', NombreTransporte = '$nomTranspor', TipoTrans = '$tipoTranspor', MontoCostoTrans = '$costoTranspor', TiempoImport = '$tiempoImport', Inicio = '$inicio', Cierre = '$cierre', FechaEntrega = '$fechEntrega', NombreRecibio = '$nomRecibio' WHERE ID = '$idImport';";
$resultado = $mi_conexion->ejecutarConsulta($sql);

//SI EL SE EJECUTA LA CONSULTA
if($resultado){
	echo<<<HTML
	   <div class = 'container'>
            <h2>Importaciones</h2>
            <section id="muestra"> <!--Sección del formulario-->
                <form method = "post" id = "form" >
                    <div class = 'form-group' id='formEditar'>
                        <input type = 'text' class = 'form-control' name = 'nombreImp' id = "nombreImp" placeholder = "Nombre de la importación"/>
                    </div>
                    <div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreCola' id = "nombreCola" placeholder = "Nombre del Colaborador"/>
                    </div>
                    <div class = 'form-group'>
                        <label>Fecha Inicial</label>
                        <input type = 'date' class = 'form-control' name = 'fechInicio' id = "fechInicio" required />
                    </div>
					<div class = 'form-group'>
                        <label>Fecha Final</label>
                        <input type = 'date' class = 'form-control' name = 'fechFinal' id = "fechFinal" required />
                    </div>
                    <div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreEmpre' = id ="nombreEmpre" placeholder = "Nombre de la Empresa"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' name = 'costoImport' = id ="costoImport" placeholder = "Costo de la importación"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' name = 'diasProceso' = id ="diasProceso" placeholder = "Días de proceso"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreAgencia' = id ="nombreAgencia" placeholder = "Nombre de la Agencia"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'number' class = 'form-control' name = 'montoTransf' = id ="montoTransf" placeholder = "Monto transferido"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'dirAlmacen' = id ="dirAlmacen" placeholder = "Dirección del almacén"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreAgente' = id ="nombreAgente" placeholder = "Nombre del Agente"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nombreAduan' = id ="nombreAduan" placeholder = "Nombre de la Aduana"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'verific' = id ="verific" placeholder = "Verificación"/>
                    </div>
					<div class = 'form-group'>
                        <label>Fecha de carga</label>
                        <input type = 'date' class = 'form-control' name = 'fechaCarg' = id ="fechaCarg" required />
                    </div>
					<div class = 'form-group'>
                        <label>Fecha de salida</label>
                        <input type = 'date' class = 'form-control' name = 'fechaSalida' = id ="fechaSalida" required />
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nomTranspor' = id ="nomTranspor" placeholder = "Nombre del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'tipoTranspor' = id ="tipoTranspor" placeholder = "Tipo del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'costoTranspor' = id ="costoTranspor" placeholder = "Costo del transporte"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'tiempoImport' = id ="tiempoImport" placeholder = "Tiempo de Importación"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'inicio' = id ="inicio" placeholder = "Inicio"/>
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'cierre' = id ="cierre" placeholder = "Cierre"/>
                    </div>
					<div class = 'form-group'>
                        <label>Fecha de Entrega</label>
                        <input type = 'date' class = 'form-control' name = 'fechEntrega' = id ="fechEntrega" required />
                    </div>
					<div class = 'form-group'>
                        <input type = 'text' class = 'form-control' name = 'nomRecibio' = id ="nomRecibio" placeholder = "Nombre del que recibió"/>
                    </div>
                        <button id = "btn1" type = "submit" class = "btn btn-primary crud1">Guardar</button>
                </form>
            </section>
            <article id = "tabla"> <!--Seccion de la tabla-->
HTML;

require_once('Conexion.php');
$conexion= new Conexion();
    $sql = "select ID,FechaI,FechaF,MontoTrans from procesoimportacion;";

    //REALIZA LA CONSULTA Y MUESTRA LA TABLA
    $resultadoCons = array_filter($conexion->seleccionarValores($sql));  
    $i=0;
	echo<<<HTML
			<table class="table table-responsive" id = "tb">
				<thead>
					<tr>
						<th>#</th>
						<th>Fecha inicio</th>
						<th>Fecha Final</th>
						<th>Costo Importación</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id ="info">
HTML;
    foreach($resultadoCons as $datos)
    {
        $idActual=$datos['ID']; 
        $fechInicioActual=$datos['FechaI'];
		$fechFinalActual=$datos['FechaF'];
		$montoTransfActual=$datos['MontoTrans'];
        $i++;
    echo <<<HTML
					<tr>
						<td>$idActual</td>
						<td>$fechInicioActual</td>
						<td>$fechFinalActual</td>
						<td>$montoTransfActual</td>
						<td>
						<a id = "btnEdit$i" href= "php/formuEditar.php?id=$idActual">Editar</a>
						<a id = "btnDelete$i" href="php/eliminar.php?id=$idActual">Eliminar</a>
						</td>
					</tr> 
HTML;
		}
echo <<<HTML
		</tbody>
	</table>
HTML;

}
else{
    echo "Ocurrió un problema al modificar la información";
}
?>