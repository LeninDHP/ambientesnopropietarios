

<html>
<head>
<meta charset="utf.8">
	<title>Literal 8</title>
	<link rel="stylesheet" type="text/css" href="css/jquerycss.css">
</head>

<body>
<script type="text/javascript" src="jscrip/jquery.js"></script>
<h2>Control de textos</h2>

<br>

<div><li>Utilizar los m&eacutetodos focus() y blur() para cambiar el color de dos
cuadros de texto cuando posicionamos el foco y cuando lo retiramos.</li></div>
<br>
<br>

text 1:<input type="text" value="" name="texto1" id="txt1">
text 2:<input type="text" value="" name="texto2" id="txt2">
<br>


<script type="text/javascript">
	
	$(document).ready(function(){

		$("input").focus(function(){
			if(this)
				$("#txt1").css("outline-color","red");
			else
				$("#txt1").css("outline-color","blue");
		}
		);
		$("input").blur(function(){
			$("#txt2").css("outline-color","yellow");
		}
		);
		
	})
</script>
</body>
</html>




