

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Deber 10</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title></title>
    </head>
    <body>
        


<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Agregar
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar</h4>
      </div>
      <div class="modal-body">
        
<form method="post"  id="form">
                            <label>Nombre: </label>
                            <input class="form-control input-sm" type="text" name="nombre" id="nombre" 
                            placeholder="Nombre">
                            <br>
                            
                            <label>Email: </label>
                            <input class="form-control input-sm" 
                            name="email" id="email" placeholder="Email" >
                            
                            <br>
                            <label>Mensaje: </label>
                            <br>
                            <textarea class="form-control input-sm"  id="mensajes" 
                            name="mensajes" >

                            </textarea>
                            <div id="mensaje3"></div>
                            <br>
                            <br>
                            <label>Noticias: </label>
                            <input type="checkbox" class="checkbox" id="noticias" name="noticias">

                            <div id="guardar"></div>
                            
                                                                           
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                        <input type="submit" value="Enviar" name="ingresar" class="btn btn-primary" id="btn">

        </form>
      </div>
    </div>
  </div>
</div>



 

     
        	





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        
    </body>
</html>
