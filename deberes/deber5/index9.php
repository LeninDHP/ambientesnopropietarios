
<html>
<head>
	<title>Literal 9</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>
<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<div>
	<li>Crear un documento que presente un formulario con un cuadro de
texto "Intereses" y dos botones: "agregar" y "eliminar". <br>Al dar clic en
el bot&oacuten "agregar" se debe agregar un cuadro de texto al formulario.
Al dar clic en el bot&oacuten "eliminar" se debe<br> eliminar el &uacuteltimo cuadro de
texto.</li>
</div>
<br>
<br>

Intereses:  <br><input type="text"  id="i0txt"><br id="e0b">
<br id ="e0r">
<div id="txt"></div>
<br>
<button id="agregar">Agregar</button>
<button id="Eliminar">Eliminar</button>

<script type="text/javascript">
    var contador =0
    var contador2=0
    var contador3=0


	$(document).ready(function(){

		

		$("#agregar").click(function(){
			contador++
			contador2++
			contador3++
			var a= "<input type='text' id =i"+contador+"txt>"
			var b= "<br id=e"+contador2+"b> <br id=r"+contador3+"b>"

				$("#txt").append(a+b)
		});	
		
		$("#Eliminar").click(function(){

			var cont3 ="#i"+(contador--)+"txt"
			var cont = "#e"+(contador2--)+"b"
			var cont2 = "#r"+(contador3--)+"b"
				$(cont3).remove()&&$(cont).remove()&&$(cont2).remove()
		});	
	})


</script>
</body>

</html>

