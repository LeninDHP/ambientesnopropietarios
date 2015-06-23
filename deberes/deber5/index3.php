<html>
<head>
<meta charset="utf.8">
	<title>Literal 3</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<div>
	<li>Basado en el ejercicio anterior. Suponemos que el encabezado y el
primer p&aacuterrafo tienen el atributo class="intro".Deber&aacutes ocultar dicho
p&aacuterrafo al darle clic al bot&oacuten.</li>
</div>
<br>
<br>


<div>
<h1 class="intro"><p>PHP<p></h1>
<br>
<p class="intro" id="hid">
<br>
PHP es un lenguaje de programaci&oacuten de uso general de c&oacutedigo del lado del servidor 
<br>originalmente dise&ntildeado para el desarrollo web de contenido din&aacutemico. Fue uno de 
<br>los primeros lenguajes de programaci&oacuten del lado del servidor que se pod&iacutean incor-
<br>porar directamente en el documento HTML en lugar de llamar a un archivo externo
<br>que procese los datos
</p>
</div>
<br>
<div>
<p>

 El c&oacutedigo es interpretado por un servidor web con un m&oacutedulo de procesador de PHP 
 <br>que genera la p&aacutegina Web resultante. PHP ha evolucionado por lo que ahora incluye
 <br>tambi&eacuten una interfaz de l&iacutenea de comandos que puede ser usada en aplicaciones 
 <br>gr&aacuteficas independientes. Puede ser usado en la mayor&iacutea de los servidores web al 
 <br>igual que en casi todos los sistemas operativos y plataformas sin ning&uacuten cost.

</p>
</div>
<div id="btn">
<br>
<button id="ocultar">Ocultar</button>
</div>
<script type="text/javascript" src="jscrip/jquery.js"></script>



<script type="text/javascript">
	
	$(document).ready(function(){


	$("#ocultar").click(function(){
			$(("#hid")).toggleClass('hide');

		})

	})
</script>
</body>
</html>