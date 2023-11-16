<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM product_form WHERE ID='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">

            <input type="text" class="form-control mb-3" name="product" placeholder="Producto" value="<?php echo $row['product']  ?>">

            <input type="text" class="form-control mb-3" name="supplier" placeholder="Proveedor" value="<?php echo $row['supplier']  ?>">

            <input type="text" class="form-control mb-3" name="amount" placeholder="Cantidad" value="<?php echo $row['amount']  ?>">

            <input type="text" class="form-control mb-3" name="price" placeholder="Precio" value="<?php echo $row['price']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>