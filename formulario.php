<!DOCTYPE html>
<html>
<head>
    <title>Procesamiento del Formulario</title>
</head>
<body>
    
<html>
<head>
    <title>Procesamiento del Formulario</title>
</
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $estatura = $_POST["estatura"];
        $peso = $_POST["peso"];
        
  
        
        
       
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $apellido</p>";
        echo "<p>Email: $edad</p>";
        echo "<p>Email: $estatura</p>";
        echo "<p>Email: $peso</p>";
       
    } else {
        echo "<p>No se recibieron datos del formulario.</p>";
    }
    ?>
</body>
</html>