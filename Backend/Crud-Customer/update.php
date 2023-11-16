<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="UPDATE user_form SET name='$name',email='$email',password='$password' WHERE ID='$ID'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
