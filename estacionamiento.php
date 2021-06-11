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
}


?>