<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM product_form";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title> user page </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese los datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="product" placeholder="Producto">
                    <input type="text" class="form-control mb-3" name="supplier" placeholder="Proveedor">
                    <input type="text" class="form-control mb-3" name="amount" placeholder="Cantidad">
                    <input type="text" class="form-control mb-3" name="price" placeholder="Precio">

                    <input type="submit" value="Enviar" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['ID'] ?></th>
                                <th><?php echo $row['product'] ?></th>
                                <th><?php echo $row['supplier'] ?></th>
                                <th><?php echo $row['amount'] ?></th>
                                <th><?php echo $row['price'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>