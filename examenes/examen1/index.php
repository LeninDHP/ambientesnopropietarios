

<?php

validar();

?>

<html>
   <head>
    <title>Crear una sesión en PHP</title>
    

   </head>

   <body>

   <div >
   <div >


<?php

function validar(){
   $usuarios = array(       
   array('nombre' => 'juan', 'pasword' => '123456'),
   array('nombre' => 'maria', 'pasword' => '654321'),
   array('nombre' => 'andres', 'pasword' => '0987654'));

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['username'];
    $contrasena = $_POST['clave'];
    $usuario_encontrado = false;
    foreach($usuarios as $list){
   
       if($nombre == $list['nombre'] and $contrasena == $list['pasword']){
          $usuario_encontrado = true;
          break;
       }
    }
    
   if($usuario_encontrado){
  $_SESSION['nombre'] = $_POST['username'];
  header('Location: inicio.php');
  exit;
}

    }else{
         echo "la contraseña es incorrecta";
    }
 }


   ?>
     <h1>Creación de una sesión</h1>
     <form action="index.php" method ="post">
       <p>
         <label>Nombre de usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="clave" />
       </p>
       <p>
        <input type="submit" value="Crear sesión" />
       </p>     
     </form>
      </div>
     </div>
   </body>
</html>




























