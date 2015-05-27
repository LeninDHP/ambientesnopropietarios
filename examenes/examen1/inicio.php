<html>
	<head runat="server">
    <title></title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form id="form1" runat="server">
    <div style="color: #FFFFFF; text-align: center; font-weight: 1000; font-family: 'Arial Black'; background-color: #3366FF">
        <br />
        Escuela Politecnica Nacional 
        <br />
        <br />
        Nombres : Lenin Hernandez<br />
        <br />
        Materia : Ambientes no Propietarios
        <br />
        <br />
        <?php
   function generartabla1(){
         $programat = array(
        	'Pedro' => '8' ,
        	'David' => '3' ,
            'Andrea' => '10' ,
        	'Esteban' => '7' ,
        	'Daniela' => '10' 
        	);

          echo "<table>";
          foreach ($programat as $nombre => $calific) {
          	echo "<tr>";
          	echo "<td>".$nombre."</td>";
          	echo "<td>".$calific."</td>";
          }
          echo "</tr>";
          echo "</table>";
    }
    function generartabla2(){
    	$redesmat = array(
    		'Gabriela' => '6' ,
        	'Maria' => '9' ,
        	'Andrea' => '10' );

          echo "<table>";
          foreach ($redesmat as $nombre => $calific) {
          	echo "<tr>";
          	echo "<td>".$nombre."</td>";        	          	
          	echo "<td>".$calific."</td>";          	
          }
          echo "</tr>";
        echo "</table>";

    }
        ?>
       

        <select name="materias"><option value ="Programacion" > Ver nota de Programacion</option>
        <option value ="Redes">Ver nota de redes</option></select>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $prog = $_POST['Programacion'];   
         $red = $_POST['Redes'];   




     }


        	?>



        
        
        </br>




        <input type="select" name= "select" value="Ver notas de redes"/>

        </br>

        <input type="checklist" name= "colores" value="blanco"/>
         </br>
         <input type="checklist" name= "colores[]" value="blanco"/>

         </br>
         </br>
         </br>


    </div>
    </form>
</body>


</html>