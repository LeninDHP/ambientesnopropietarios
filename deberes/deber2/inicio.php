
<html>
  <head>
    <title>Hemos iniciado sesión</title>
    <style type="text/css">
        </style>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>

  <body>  
    <div class="style3" >
    <div class="style1"> 
        <span >Nombre:&nbsp; Lenin Hernandez </span>
        <br />
        <span >Materia:&nbsp; Ambientes no Propietarios </span>
        <br  />
        <span ><br />
        <br />
        &nbsp;&nbsp;&nbsp; REGISTRO<br />
        <section>
        <p>
          <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
        </p>
        
        </section> 
        <section>
        <p>Bienvenido <?=$_SESSION['username'];?> Por Favor Ingresa Tus Datos</p>
      </section>
    </div>
    </div>


    <div class="style4" style="height: 637px; background-color: #0033CC">
    <span >
    </br>
    <form name="formulario" method="post" action="info.php">
    <label>Nombre:</label></span>
    <input type="text" name="name" value ="" style="margin-left: 155px" class="style6"/>
    <br />
    <br />
    <span><label>Apellidos:</label></span>
    <input type="text" name="apellido" value ="" style="margin-left: 145px" class="style6"/>
    <br />
    <br />
    <span ><label>Genero:</label></span>
    <input type="radio" name="Genero" value="Masculino" style="margin-left: 145px" 
            class="style4" /><span >Masculino</span>
    <input type="radio" name="Genero" value="Femenino" class="style4" />
    <span >Femenino</span>
    <br  />
    <span ><label>Correo Electrónico:</label></span>
    <input type="text" name="email" value ="" style="margin-left: 75px" class="style6"/>
        <br />
        <br />
        <span ><label>Fecha de Nacimento:</label></span>
    <input type="text" name="date" value ="" style="margin-left: 65px" class="style6"/>
        <br />
        <br  />
        <span ><label>Ciudad de Nacimiento:</label></span>
    <input type="text" name="city" value ="" style="margin-left: 50px" class="style6"/>
        <br />
        <br  />
        <span ><label>Cuales son sus Intereses:</label></span>
        <br  />
        <br  />

    PROGRAMACION <input name="interes[]" type="checkbox"  value="PROGRAMACIÓN" class="style4" />
    <br  /> 
    REDES <input name="interes[]" type="checkbox"  value="REDES" class="style4" />
    <br  /> 
    ENSAMBLAJE <input name="interes[]" type="checkbox"  value="ENSAMBLAJE" class="style4" />
    <br  /> 
    SOA <input name="interes[]" type="checkbox"  value="SOA" class="style4" />
    <br  />  
    BI <input name="interes[]" type="checkbox"  value="BI" class="style4" />
    <br  /> 
    ANALISIS DE TEXTO <input name="interes[]" type="checkbox"  value="ANALISIS DE TEXTO" class="style4" />
    <br  /> 
    BIG DATA <input name="interes[]" type="checkbox"  value="BIG DATA" class="style4" />
    <br  /> 
    REDES SOCIALES <input name="interes[]" type="checkbox"  value="REDES SOCIALES" class="style4" />
    <br  /> 
    <br  />
    <span ><label>Bibliografía:</label></span>
    <br />
    <br /><input type="text" name="bibli" value ="" 
            style="margin-left: 16px; height: 100px; width: 505px;" class="style6"/> 
    <br /> 
    <br /> 
    <input type="submit" />
</form>
</div>
</body>
</html>
