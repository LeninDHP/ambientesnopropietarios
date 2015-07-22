<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./inicio_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Inicio de Session</h2>
        <label for="inputEmail" class="sr-only">Email </label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" class="form-control" name="pass"placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <div calss="container">


        <a href="#" data-toggle="modal" data-target="#myModal" >Registrar Nuevo Usuario</a>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                 <div class="modal-content">
                 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Registro de Usuarios</h4>
                </div>
                <div class="modal-body">
        
                    <form  action = "" method="post" id="form">
                         <label for="exampleInputName2">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="David">
                        
                        <br>
                        <br>
              
                        <label for="exampleInputName2">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario">
                        

                        <br>
                        <label >Contraseña</label>
                        <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="*******">
                        
                        <br>
                        <br>
                        <label >Verificar Contraseña</label>
                        <input type="password" name="verificar" class="form-control" id="verificar" placeholder="*******">
                       
                        <br>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Ingresar" name="ingresar" id="btn">
                </div>
                </form>
                </div>



        </div>
      </div>
    </div>
  </div>



    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./inicio_files/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/main.js"></script>
     <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>