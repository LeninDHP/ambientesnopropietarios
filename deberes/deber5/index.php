<html>
<head>
<meta charset="utf.8">
	<title>Literal 1</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<br>
<div>
<li>Crear un documento HTML con un encabezado, dos p&aacuterrafos y un
bot&oacuten. Al pulsar el bot&oacuten se debe ocultar todo el HTML.</li>
</div>
<br>



<div>
<h1>PHP</h1>
<br>
<p>
PHP es un lenguaje de programaci&oacuten de uso general de c&oacutedigo del lado del servidor 
<br>originalmente dise&ntildeado para el desarrollo web de contenido din&aacutemico. Fue uno de 
<br>los primeros lenguajes de programaci&oacuten del lado del servidor que se pod&iacutean incor-
<br>porar directamente en el documento HTML en lugar de llamar a un archivo externo
<br>que procese los datos
	
</p>
<br>
<p>
 El c&oacutedigo es interpretado por un servidor web con un m&oacutedulo de procesador de PHP 
 <br>que genera la p&aacutegina Web resultante. PHP ha evolucionado por lo que ahora incluye
 <br>tambi&eacuten una interfaz de l&iacutenea de comandos que puede ser usada en aplicaciones 
 <br>gr&aacuteficas independientes. Puede ser usado en la mayor&iacutea de los servidores web al 
 <br>igual que en casi todos los sistemas operativos y plataformas sin ning&uacuten cost.
	
</p>
</div>
<button id="ocultar">Ocultar</button>
<script type="text/javascript" src="jscrip/jquery.js"></script>


<script type="text/javascript">
	
	$(document).ready(function(){


		$("#ocultar").click(function(){
			$("div").toggleClass('hide');
			if ($(this).html()=='Ocultar')
				$(this).html('Mostrar')
			else
				$(this).html('Ocultar')
		})


	})
</script>
</body>
</html>