<?php

include("CONEXION.PHP");
$con=conectar();

$idlibro = $_GET['id'];

$sql= "DELETE FROM libro where idlibro = '$idlibro'";
$query=mysql_query($con,$sql);

if($query){
	header("location: LIBROS.PHP");
}
?>
