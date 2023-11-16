<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$company=$_POST['company'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO supplier_form VALUES('$ID','$company','$email','$password')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
