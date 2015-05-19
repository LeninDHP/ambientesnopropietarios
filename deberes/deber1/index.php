<?php


$mes_actual = date ("n");
$dia_actual = date ("j");
$year = date ("Y");
//obtener el dia de la semana 
$dia_semana = date ("w", mktime (0, 0, 0, $mes_actual, 1, $year)) + 7;
$ultimo_dia_mes = date ("d", (mktime (0, 0, 0, $mes_actual + 1, 1, $year) -1));
$meses = array (1 => "Enero", "Marzo", "Abril", "Mayo", "Junio", "Julio", 
                "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>
<html lang="es">

<head>
    
    <title>CALENDARIO</title>
  <link rel="stylesheet" type="text/css" href="css/indexcs.css">
    </head>
<body>  
    
    
        <br />
    <div>
    Nombre: Lenin Hernandez
    </br>
    Materia: Ambientes no Propietarios
    </br>
    Tema: Calendario
     </br>
</br>
    </div>
    
    <table id="funcionStyle">
    <caption><?php echo $dia_actual.", de ".$meses[$mes_actual]." de ".$year?></caption>
        <tr> 
            <th>Lu</th>
            <th>Ma</th>
            <th>Mi</th>
            <th>Ju</th>
            <th>Vi</th>
            <th>Sa</th>
            <th>Do</th>
            
        </tr>
        <?php
    include('funciones.php');
      
        listar($dia_semana, $ultimo_dia_mes, $dia_actual);
        ?>
        
</table>
</div>
</body>

</html>
        