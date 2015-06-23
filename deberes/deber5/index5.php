
<html>
<head>
<meta charset="utf.8">
	<title>Literal 5</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<li>
	Ahora ocultar los primeros elementos de las dos listas.
</li>
<br>
<br>

<div>
<ul id="lista1" class="ocultar">
<li ><a href="#" id="elm1" class="elemento">Tortilla</a></li>
<li><a href="#" id="elm2">Jamon</a></li>
<li><a href="#" id="elm3">Queso</a></li>

</ul>

<ul id="lista2" class="ocultar">
<li><a href="#" id="elm4" class="elemento">Coca Cola</a></li>
<li><a href="#" id="elm5">Leche</a></li>
<li><a href="#" id="elm6">T&eacute</a></li>
</ul>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){


	$("#elm1").click(function(){
			$(("a.elemento")).toggleClass('hide');

		})

	})
</script>
</body>
</html>