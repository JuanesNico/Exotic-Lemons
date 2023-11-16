<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM product_form  WHERE ID='$id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
