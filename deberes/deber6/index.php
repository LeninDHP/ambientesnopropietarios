<?php
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Enpleados</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>
  <body>
  	<div>
  		<div class="row">
  			<div class="col-md-12">		
  				<div class="masthead">
	  				<nav>
	  					<ul class="nav nav-justified">
	  						<li class="active"><a href="#">Home</a></li>
				            <li><a href="#">Projects</a></li>
				            <li><a href="#">Services</a></li>
				            <li><a href="#">Downloads</a></li>
				            <li><a href="#">About</a></li>
				            <li><a href="#">Contact</a></li>
	          			</ul>
	       			 </nav>
      			</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
  				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  					<ol class="carousel-indicators">
  						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
  						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  					</ol>

  				<div class="carousel-inner imagen" role="listbox">
  					<div class="item active">
                  
          				<img src="imagen/im2.jpg" alt="">
          				<div class="carousel-caption">
            			
          				</div>
       				 </div>
        			<div class="item">
          				<img src="imagen/im3.jpg" alt="">
          				<div class="carousel-caption">
            			
          				</div>
        			</div>
              <div class="item">
                  <img src="imagen/im.jpg" alt="">
                  <div class="carousel-caption">
                  
                  </div>
              </div>
        			<div class="item">
          				<img src="imagen/im4.jpg" alt="">
          				<div class="carousel-caption">
            			
          				</div>
        			</div>
      			</div>

      			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        		<span class="sr-only">Previous</span>
      			</a>

      			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
       			 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       			 <span class="sr-only">Next</span>
      			</a>
    		</div>
  		</div>
 </div>

  		<div class="row">
  			<div class="col-md-12 contenido">
  				<div class="row">
  					<div class="col-md-3">
  						<span>   </span>
  					</div>
  					<div class="col-md-6 columna2">
  						<div class="row">

  							<form action= "insertar.php" class="form-inline" method="post">
  							<br>
  							<div class="form-group">
                
                
                <label><h3>Registro de Empleado</h3></label>
                <br>
                <br>


  							<label for="exampleInputName2">Nombre</label>
    						<input type="text" name="nombre" class="form-control" id="nombre" placeholder="David">
  						
  							<label for="exampleInputName2">Apellido</label>
    						<input type="text" name="apellido" class="form-control" id="apellido" placeholder="Fernandez">
  							
  							<br>
  							<br>
  							<label >Fecha de Nacimiento</label>
    						<input type="text" name="fechadenacimiento" class="form-control" id="fechadenacimiento" placeholder="01/05/2015">
    						<br>
  							<br>
  							<label >Dirección</label>
    						<input type="text" name="direccion" class="form-control" id="direccion" placeholder="Calderon/Barrio Landazuri">
    						<br>
  							<br>
  							<label >Teléfono</label>
    						<input type="text" name="telefono" class="form-control" id="telefono" placeholder="022824163">
                <br>
                <br>
                
  							<label ><h5><strong>Estado Civil </strong> </h5></label> 
                <select class="form-control" name="estado_civil" id="estado_civil" onchange="crear(this.value)">
                  <option value="Soltero">Soltero</option>
                  <option value="Casado">Casado</option>
                  <option value="Viudo">Viudo</option>
                  <option value="Union Libre">Union Libre</option>
                </select>
    						
  							<label ><h5><strong>Departamento</strong> </h5></label>
                <select class="form-control" name="departamento" id="departamento" onchange="crear(this.value)">
                  <option value="Desarrollo">Desarrollo</option>
                  <option value="Mantenimiento">Mantenimiento</option>
                  <option value="Servicio">Servicio</option>
                  <option value="Recursos Humanos">Recursos Humanos</option>
                  <option value="Operaciones">Operaciones</option>
                </select>   						      
                <br>
  							<br>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar">
                </form>
  							<br>
                </form>


  					<?php
              $query = 'SELECT * FROM empleado';
              $result = $conn->query($query);
              if(!$result)die($conn->error);

              $num_rows = $result->num_rows;

              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<table class="table table-bordered">';
              	echo '<tr class="active">';
              		echo '<th><h5><small><strong>Nombre</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Apellido</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Fecha de Nacimiento</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Direcci&oacute;n</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Tel&eacute;fono</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Estado Civil</strong></small></h5></th>';
              		echo '<th><h5><small><strong>Departamento</strong></small></h5></th>';
              		echo '</tr>';
              		echo '<tr><td></td></tr>';

              		for ($i=0; $i <$num_rows ; ++$i) { 
              			$result->data_seek($i);
              			$row = $result->fetch_array(MYSQLI_ASSOC);
              		
              	echo '<tr class="info">';
              	echo '<td><h6><small>'.$row['nombre'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['apellido'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['fechadenacimiento'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['direccion'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['telefono'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['estado_civil'].'</small></h6></td>';
              	echo '<td><h6><small>'.$row['departamento'].'</small></h6></td>';
              	echo '<td> 
                	<form action ="" method="post" >
                    <button type="button" class="btn btn-primary btn-xs btn-danger" data-toggle="modal" data-target="#myModal">
                  Eliminar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                      </div>
                      <div class="modal-body">
                        Desea eliminar el registro de la base de datos?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Si</button>
                      </div>
                    </div>
                  </div>
                </div>

            	  <input type="hidden" value="' . $row['id'] . '"  name="id">
            	  </form></td>

                  <td>
                  <form action ="" method="post" >
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal2">
                    Modificar
                  </button>

                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel2">Modificar Datos</h4>
                        </div>
                        <div class="modal-body">
        
      
                <label for="exampleInputName2">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre"  value="'.$row['nombre'].'">
              
                <label for="exampleInputName2">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="'.$row['apellido'].'">
                
                <br>
                <br>
                <label >Fecha de Nacimiento</label>
                <input type="text" name="fechadenacimiento" class="form-control" id="fechadenacimiento" value="'.$row['fechadenacimiento'].'">
                <br>
                <br>
                <label >Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="'.$row['direccion'].'">
                <br>
                <br>
                <label >Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="'.$row['telefono'].'">
                <br>
                <br>
                
                <label ><h5><strong>Estado Civil </strong> </h5></label> 
                <select class="form-control" name="estado_civil" id="estado_civil" onchange="crear(this.value)">
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Union Libre">Union Libre</option>

                  </select>
                
                <label ><h5><strong>Departamento</strong> </h5></label>
                <select class="form-control" name="departamento" id="departamento" onchange="crear(this.value)">
                  <option value="Desarrollo">Desarrollo</option>
                  <option value="Mantenimiento">Mantenimiento</option>
                  <option value="Servicio">Servicio</option>
                  <option value="Recursos Humanos">Recursos Humanos</option>
                  <option value="Operaciones">Operaciones</option>
                </select>
                      
                <br>
                <br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                  </div>
                </div>
              </div>
            </td>
            <td>

      	  <input type="hidden" value="' . $row['id'] . '"  name="id">
      	  </form></td>';

              	echo '</tr>';
              }
              	
              echo '</table>';
              $result->close();
              $conn->close();
            ?>


      

                </div>
              </form>

  						</div>
  					</div>
  					<div class="col-md-3">  </div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
  </body>
</html>