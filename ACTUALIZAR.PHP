<?php

include("CONEXION.PHP");
$con=conectar();

$idlibro =$_POST['idlibro'];
$nombre_libro =$_POST['nombre_libro'];
$fecha_publicacion =$_POST['fecha_publicacion'];
$editorial =$_POST['editorial'];

$sql = "UPDATE libro SET idlibro='$idlibro',nombre_libro='$nombre_libro',
fecha_publicacion='$fecha_publicacion',editorial='$editorial'";
$query=mysql_query($con,$sql);

if($query){
	header("location: LIBROS.PHP");
}
?>