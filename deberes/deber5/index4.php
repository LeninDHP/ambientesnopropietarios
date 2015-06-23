
<html>
<head>
<meta charset="utf.8">
	<title>Literal 4</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<div>
	<li>Seleccionar el primer elemento de la primera lista y ocultarlo al darle
clic a este elemento.</li>
</div>
<br>
<br>

<div>
<ul id="lista1" class="ocultar">
<li ><a href="#" id="elm1">Tortilla</a></li>
<li><a href="#" id="elm2">Jamon</a></li>
<li><a href="#" id="elm3">Queso</a></li>

</ul>

<ul id="lista2" class="ocultar">
<li><a href="#" id="elm4">Coca Cola</a></li>
<li><a href="#" id="elm5">Leche</a></li>
<li><a href="#" id="elm6">T&eacute</a></li>
</ul>
</div>
<script type="text/javascript">
	
	$(document).ready(function(){


	$("#elm1").click(function(){
			$(("#elm1")).toggleClass('hide');

		})

	})
</script>
</body>
</html>