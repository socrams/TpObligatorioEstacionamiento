<?php

include_once "funcion.php";

class estacionamiento 
{
	/*public static function saludar()
	{
		echo "hola";
	}
*/
	public static function leer()
	{
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=LeerArchivo("estacionados.txt","=>");//esta en funcion.php
		return $listaDeAutosLeida;
	}
public static function leercobro()
	{
		//$listaDeAutosLeida=array();
		$listaDeAutosLeida=LeerArchivo("cobrs.txt","=>");//esta en funcion.php
		return $listaDeAutosLeida;
	}
	/*
	de marcos 
	public static function retornarListadosAutoComplit(){
		$arrayPatentes=estacionamiento::leer("estacionados.txt");
		$listadoRetorno=array();
		foreach ($arrayPatentes as $datos) {
			$listadoRetorno="\".$datos[]\",";
		}
		return $listadoRetorno;
	}
	*/

	public static function CrearTablaEstacionados() 
	{
		$listado=estacionamiento::leer();//llama la funcion de arriba
		$tablaHTML="<table>";
		$tablaHTML="<table border=1>";
		$tablaHTML.="<th>";
		$tablaHTML.="Patentes";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Fecha y Hora de Ingreso";
		$tablaHTML.="</th>";
		foreach($listado as $auto)
		{
			$tablaHTML.="<tr><td>$auto[0]</td><td>$auto[1]</td></tr>";
		}
		$tablaHTML.="</table>";
		$archivo=fopen("tablaestacionados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);
	}
	public static function GuardarListado($arrayListado)
	{
		$archivo=fopen("estacionados.txt", "w");
		foreach ($listados as $auto)
		{
			if(isset($auto[1]))
			{
				fwrite($archivo,$auto[0]."=>".$auto[1]."\n");
			}
		}
		fclose($archivo);
	}
	public static function CrearTablaCobrados() 
	{
		$listado=estacionamiento::leercobro();//llama la funcion de arriba
		$tablaHTML="<table>";
		$tablaHTML="<table border=1>";
		$tablaHTML.="<th>";
		$tablaHTML.="Patentes";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Cobrado";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Fecha y Hora de Egreso";
		$tablaHTML.="</th>";
		$tablaHTML.="<th>";
		$tablaHTML.="Fecha y Hora de Ingreso";
		$tablaHTML.="</th>";
		foreach($listado as $auto)
		{
			$tablaHTML.="<tr><td>$auto[0]</td><td>$auto[1]</td><td>$auto[2]</td><td>$auto[3]</td></tr>";
		}
		$tablaHTML.="</table>";
		$archivo=fopen("tablacobrados.php","w");
		fwrite($archivo,$tablaHTML);
		fclose($archivo);
	}
}


?>
