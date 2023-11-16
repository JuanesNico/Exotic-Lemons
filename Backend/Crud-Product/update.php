<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$product=$_POST['product'];
$supplier=$_POST['supplier'];
$amount=$_POST['amount'];
$price=$_POST['price'];

$sql="UPDATE product_form SET product='$product',supplier='$supplier',amount='$amount',price='$price' WHERE ID='$ID'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
