<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_company'])) {
   header('location:login_form.php');
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
         <h3>Hola,</h3>
         <h1>Bienvenido <span><?php echo $_SESSION['user_company'] ?></span></h1>
         <br>
         <a href="../../Index.html" class="btn">Salir</a>
      </div>

   </div>

</body>

</html>