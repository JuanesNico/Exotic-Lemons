<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$company=$_POST['company'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="UPDATE supplier_form SET company='$company',email='$email',password='$password' WHERE ID='$ID'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
