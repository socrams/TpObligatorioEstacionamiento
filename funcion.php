<?php  
function IngresarAuto($patente,$fechayhora)
{
	$archivoEstacionados="estacionados.txt";
	$renglon=$patente."=>".$fechayhora."\n";
	$archivo1= fopen($archivoEstacionados, "a");

    fwrite($archivo1,$renglon);
    fclose($archivo1);
}
function LeerArchivo($NomArchivo)
{
	$matrizDeRetorno=array();
	$archivo=fopen($NomArchivo,"r"); 
	while (!feof($archivo))
	{
		$renglon=fgets($archivo);
		$registroActual=explode("=>", $renglon);
		if(isset($registroActual[1]))
		{
			$matrizDeRetorno[]=$registroActual;
		}
	}
	fclose($archivo);
	return $matrizDeRetorno;
}

function dateDifference($fechayhoraSalida, $fechayhora)
{
	/* diferencia de hora -_-
	$datetime1 = new DateTime('2009-10-11');
	$datetime2 = new DateTime('2009-10-13');
	$interval = $datetime1->diff($datetime2);
	"->"+ i minutos h horas d dias m meses
	*/
    $datetime1=new DateTime($fechayhoraSalida);
    $datetime2=new DateTime($fechayhora);
    $minutos= $datetime1->diff($datetime2);
    $minutos=($minutos->i)+($minutos->h*60)+($minutos->d*24*60);
    return $minutos;
}

function cobro($patente,$fechayhora,$fechayhoraSalida)
{

	$PrecioPorMinuto=10;
	$PrecioPorHora=150;
	$PrecioMediaHora=100;
	$PrecioCuartoHora=80;
	$minutos=dateDifference($fechayhoraSalida,$fechayhora);
	//$minutos= 85;
	echo "cantidad de minutos que estuvo estacionado ".$minutos;
	if ($minutos>60) 
	{
		$n=$minutos/60;
		$ParteEntera = floor($n);

		$FraccionDeLaHora = $n - $ParteEntera;
		$FraccionDeLaHora*=60;
		if ($FraccionDeLaHora<=45 && $FraccionDeLaHora>=30)
		{
			$precio=($ParteEntera*$PrecioPorHora)+$PrecioMediaHora;
		}
		elseif ($FraccionDeLaHora<30 && $FraccionDeLaHora>=15)
		{
			$precio=($ParteEntera*$PrecioPorHora)+$PrecioCuartoHora;
		}
	}
	else
	{
		if ($minutos>45)
		{
			$precio=$PrecioPorHora;
		}
		elseif ($minutos<46 && $minutos>=30)
		{
			$precio=$PrecioMediaHora;
		}
		else
		{
			$precio=$PrecioCuartoHora;
		}
	}	
	return $precio;
}

function Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$cobro)
{
	$renglon=$patente."=>".$cobro."=>".$fechayhoraSalida."=>".$fechayhora;
	$cobrados=fopen("cobrs.txt", "a");
	fwrite($cobrados,$renglon);
	fclose($cobrados);
}

function Delete($archivo,$patente,$fechayhora)
{
	/*$DELETE = $arrayPatentes;

	$data = file("estacionados.txt");

	$out = array();

	foreach($data as $line) 
	{
	    if(trim($line) != $DELETE) 
	    {
	        $out[] = $line;
	    }
	}
$fp = fopen("./foo.txt", "w+");
flock($fp, LOCK_EX);
foreach($out as $line) {
	     fwrite($fp, $line);
	 }
	 flock($fp, LOCK_UN);
	 fclose($fp);  */
	$renglon=$patente."=>".$fechayhora;
	$contents = file_get_contents($archivo);
	$contents = str_replace($renglon,'', $contents);
	file_put_contents($archivo, $contents);
}

function Comparar($patente,$arrayPatentes,$fechayhoraSalida,$archivo)
{
	foreach($arrayPatentes as $datos)
	{   
	    if($datos[0] == $patente)
	    {
			$fechayhora=$datos[1];
			$datos=$datos[0];
			$precio=cobro($patente,$fechayhora,$fechayhoraSalida);
	   		Delete($archivo,$patente,$fechayhora);
			Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$precio);
		}
	}
	if ($patente!=$datos)
	{
		header("Location: /error/errorpatenteingreso.php");
   	}
}
/*
me falta: 
agregar menu registro ya creado al index.
cambiar fotos.
crequear include y include_once en c/file.-
*/
?>
