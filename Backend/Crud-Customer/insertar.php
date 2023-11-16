<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO user_form VALUES('$ID','$name','$email','$password')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
