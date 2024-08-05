<?php 
include('connection.php');
$con =connection();

$id=null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$username=$_POST['username'];
$contraseña=$_POST['contraseña'];
$email=$_POST['email'];

$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$apellido','$username','$contraseña','$email')";

$query =mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>