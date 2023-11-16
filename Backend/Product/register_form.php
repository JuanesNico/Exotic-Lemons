<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $product = mysqli_real_escape_string($conn, $_POST['product']);
   $supplier = mysqli_real_escape_string($conn, $_POST['supplier']);
   $amount = mysqli_real_escape_string($conn, $_POST['amount']);
   $price = mysqli_real_escape_string($conn, $_POST['price']);

   $select = " SELECT * FROM product_form WHERE supplier = '$supplier' && product = '$product' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'Este producto ya existe';
   } else {

      $insert = "INSERT INTO product_form(product, supplier, amount, price) VALUES('$product','$supplier','$amount', '$price')";
      mysqli_query($conn, $insert);
      header('location:user_page.php');
   }
};


?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <link rel="stylesheet" href="css/Estilos.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Registro-Producto</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="text" name="product" required placeholder="Ingrese el nombre de su producto">
         <input type="text" name="supplier" required placeholder="Ingrese el nombre del proveedor">
         <input type="text" name="amount" required placeholder="Ingrese la cantidad">
         <input type="text" name="price" required placeholder="Ingrese el precio">
         <input type="submit" name="submit" value="Regístrese" class="form-btn">
      </form>

   </div>

</body>

</html>