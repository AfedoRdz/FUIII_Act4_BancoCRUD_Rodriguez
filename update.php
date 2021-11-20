<?php

include("conexion.php");
$con=conectar();

$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];

$sql="UPDATE empleado SET  nombres='$nombres',apellidos='$apellidos',email='$email' WHERE dni='$dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>