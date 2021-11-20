<?php
include("conexion.php");
$con=conectar();

$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];


$sql="INSERT INTO empleado VALUES('$dni','$nombres','$apellidos','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>