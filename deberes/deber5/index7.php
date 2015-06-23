

<html>
<head>
<meta charset="utf.8">
	<title>Literal 7</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<div><li>Utilizar el evento hover para mostrar un mensaje en un d#mensaje
cuando nos posicionamos sobre un el y otro cuando salgamos de el.</li></div>
<br>
<br>


<div>
<h1 >PHP</h1>
<br>
<p  >
A continuaci&oacuten se va a efectuar un ejercicio. Por favor pasa el mouse a trevez
<br>
del siguiente mensaje:
<br>
</p>
<p id="elm1" class="msj">Pasa el mouse por aqu&iacute</p>
</div>
<br>
<div>

</div>
<script type="text/javascript">
	
	$(document).ready(function(){

		$("#elm1").hover(function(){
			$("p.msj").html("Usted a pasado el mouse por este mensaje");
		},function(){
			$("p.msj").html("Pasa el mouse por aqui, nuevamente");
		}
		)


	})
</script>
</body>
</html>











