<?php 

   require('conexion.php');

                $id=uniqid();
    			$direccion = $_POST['direcciones'];
			    $NoPatrulla= $_POST['NoPatrulla'];
			    $NomOfi= $_POST['NomOfi'];
			    $situacion= $_POST['situacion'];
			    $logo=$_FILES["logo"]["name"];
			    $ruta=$_FILES["logo"]["tmp_name"];
				$destino="imagenes/".$id."".$logo;
				copy($ruta,$destino);

				 $query="insert into denuncias (id_denuncia,Direccion,No_patrulla,Nombre_ofi,situacion,imagen) values ('$id','$direccion','$NoPatrulla','$NomOfi','$situacion','$destino')";
				  
				  $in = mysqli_query($conexion,$query);
				   if($in==true){				 		
						echo "<script language='javascript'>window.location='index.html'</script>";
				 	}
				 	else{
				 		echo "<h1>Error </h1><br>".mysqli_error($conexion);
				 	}
				


?>			