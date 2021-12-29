<?php
function conectar(){
   $host = "localhost";
   $user = "root";
   $pass="";

   $bd = "libros";

   $conexion=mysql_connect($host,$user,$pass);
   mysql_select_db($conexion,$bd);

   return $conexion;

}