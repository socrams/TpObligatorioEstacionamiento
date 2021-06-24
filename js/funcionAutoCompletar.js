<?php

include "funcion.php"

//$ListadoPatentes= "\"aaa123\" , \"bbb102\" , \"abd333\"";

//$TextoDelArchivoJS=$(function(){

		    var patentes = [ 
			 	//{value: "asd345" , data: " 2015-09-16 00:51:17 " }, 
			 	
		 	//$ListadoPatentes
			   

			   
			  ];
			  
			  // setup autocomplete function pulling from patentes[] array
			  $('#autocomplete').autocomplete({
			    lookup: patentes,
			    onSelect: function (suggestion) {
			      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
			      $('#outputcontent').html(thehtml);
			         $('#botonIngreso').css('display','none');
      						console.log('aca llego');
			    }
			  });
			  

			});
/*$archivo=fopen("funcionAutocompletar.js","w");
fwrite($archivJS,$TextoDelArchivoJS);
fclose($archivoJS);*/
?>