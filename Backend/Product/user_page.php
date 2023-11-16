<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_company'])) {
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <link rel="stylesheet" href="css/Estilos.css">

</head>

<body>

   <div class="container">

      <div class="content">
         <h3>Hola, ¿Desea Registrar Más Productos?</h3>
         <br>
         <a href="register_form.php" class="btn">Si</a>
         <a href="../../Index.html" class="btn">No</a>
      </div>

   </div>

</body>

</html>