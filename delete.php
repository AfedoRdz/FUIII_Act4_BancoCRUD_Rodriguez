<?php

include("conexion.php");
$con=conectar();

$dni=$_GET['id'];

$sql="DELETE FROM empleado WHERE dni='$dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
