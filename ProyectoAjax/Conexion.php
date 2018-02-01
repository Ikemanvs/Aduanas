<?php
include('php/Parametros.php');
class Conexion{
	
	function __construct(){
		try{
		   $this->conexion=new mysqli(SERVIDOR,USUARIO,CONTRASENIA,BD)
		   or die ("Error en la conexión");
		   mysqli_set_charset($this->conexion,"utf8");
		   //mysqli_select_db($this->con,BD) or die ("No se ha encontrado la base de datos");
		}catch(Exception $ex){
			throw $ex;  
		}
	}
	// para saber cuántos registros arroja la consulta
	function totalRegistros($sql){ 
		$resultado_consulta=$this->conexion->query($sql);
		$total_registros=$resultado_consulta->num_rows;
		return $total_registros;
	}
	
	// para cuando implement un SELECT
	function traerValores($sql){
		$resultado_consulta=$this->conexion->query($sql);
		$datos=null;
		while($fila=mysqli_fetch_assoc($resultado_consulta)){
			$datos=$fila;
		}
		return $datos;
	}
	
	function seleccionarValores($sql){
		$resultado_consulta=$this->conexion->query($sql);
		$datos=array();
		while ($datos[]=$resultado_consulta->fetch_assoc());
		return $datos;
	}
	
	function ejecutarConsulta($sql){
		$resultado_consulta=$this->conexion->query($sql);
		if($resultado_consulta){
			return true;
		}
	}
	
	  
}
?>