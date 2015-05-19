<?php
 
  function listar($dia_semana, $ultimo_dia_mes, $dia_actual){
    
    
    $ultima_celda = $dia_semana + $ultimo_dia_mes;
      for( $i = 1; $i <= 49; $i++ ){
          if( $i == $dia_semana ){
        $dia = 1;   
    }
    if( $i < $dia_semana || $i >= $ultima_celda ){
        echo "<td></td>";
    }
    else{
        if( $dia == $dia_actual)
            echo "<td class='hoy'>$dia</td>";
        else
            echo "<td>$dia</td>";
        $dia++;
    }
    if( $i % 7 == 0)
    {
        echo "</tr><tr>\n";
    }
} 

}
?>