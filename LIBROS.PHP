<<?php
	include("CONEXION.PHP");
	$conexion=conectar();

	$sql= "SELECT * FROM libro";
	$query = mysqli_query($conexion,$sql);

	$row = mysqli_fetch_array($query);
?>


<<?php
	while($row=mysqli_fetch_array($query)){

?>
   <tr>
   		<th><?php echo $row['idlibro']?></th>
   		<th><?php echo $row['nombre_libro']?></th>
   		<th><?php echo $row['fecha_publicacion']?></th>
   		<th><?php echo $row['editorial']?></th>

