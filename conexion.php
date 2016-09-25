<?php
    $server="localhost";
	$user="u395237517_smpm";
	$password="qwerty";
	$bd="u395237517_smpm";
	
			$conexion=mysqli_connect($server,$user,$password,$bd) or die ("Error de conexion".mysqli_errno($conexion));
			
	//////tablas dentro de la base de datos		
	$usuarios="usuarios";
	$ustemp="ustemp";
	$categorias="categorias";
?>
