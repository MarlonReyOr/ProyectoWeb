<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content="widt=device-width, initial-scale=1.0">
  <title> Datos para formulario</title>

  <?php
    $catalogo=file("CatMaterias.csv");
  ?>

</head>
<body>
    <h1>Datos de entrada del usuario</h1>
    <?php
        //echo$catalogo[0];
        $datosCat=explode(",",$catalogo[0]);
        echo $datosCat[0];
        echo $datosCat[1];
        echo $datosCat[2];
    ?>
    <form action="./script/recibeDatos.php"
    name="frmDatos" id= "frmDatos"
    enctype="multipart/form-data"
    method ="post"
    >

    <!--
    <label for="nombre">Escribe el nombre del, usuario</label>
    <input type ="text" name="nombre" id="nombre" size ="15"><br>
    -->
    <label for="materias">Selecciona una materia</label>
    
    
    <select name="materias" id="materias">
        <option value="1-Cal">Calculo</option>
          <?php
          echo "<option value='".
          $datosCat[0].
          "-".
          $datosCat[1].
          "'>". 
          $datosCat[2].
          "</option>";
      ?>
        <option value="1-Avec">Analisis vectorial</option> <!--Analisis vectorial es lo que se ve en la interfaz y 1-AVec se envian -->
    </select>
    <input type="submit" name="inputEnviar" value="Enviar datos">

</body>

</html>