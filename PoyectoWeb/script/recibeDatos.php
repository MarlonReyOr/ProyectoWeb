<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content="widt=device-width, initial-scale=1.0">
  <title>Los datos enviados por el usuario</title>
  <?php
        $nombreUsuario=$_POST['materias'];//nombre es el name de la entrada del formulario
        
    ?>
</head>
<body>
    <h1>Los datos enviados en el servidor</h1>
    <p>Los datos del usuario son:</p>
    <p>Nombre:
        <?php
            echo $nombreUsuario;
        ?>
    </p>
</body>

</html>