<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$product=$_POST['product'];
$supplier=$_POST['supplier'];
$amount=$_POST['amount'];
$price=$_POST['price'];

$sql="INSERT INTO product_form VALUES('$ID','$product','$supplier','$amount','$price')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
