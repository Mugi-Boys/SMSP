<?php
require("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, minimum-scale1.0">
   <link href="https://fonts.googleapis.com/css? familily=Merriweather+Sans:400,300" rel="stylesheet" type="text/css">
   <title>anticorrupcion</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/aspecto.css">
   <link rel="stylesheet" type="text/css" href="css/denuncias.css">
   <link rel="shortcut icon" href="media/favicon.ico"/> <!--*iconos*-->
   
   <style>
       .nav_den{
    color: #DDD;
    background:  #998A7E;
    font-family: 'Libre Baskerville', serif;
    width: 130px;
    text-align: center;
       }
	</style>
</head>
<body BACKGROUND="media/fondo.png">
<!--inicia cabecera-->
 <header>
<?php include("nav.php"); ?>
        </header>
     
    <!-- fin de cabeza-->
    
    <!--Inicia cuerpo--->
    <div class="container">
        <div class="cuerpo">
            <center>
                <form action="denu.php" name="denuncia" id="denuncia" method="POST" class="form-horizontal" role="form"  enctype="multipart/form-data"    >
				    <h2 class="sombra">Hacer una denuncia</h2><br>
                        	<?php  
								// Consultar la base de datos
						   $selDir= "select * from direcciones";
						   $resSelDir = mysqli_query($conexion,$selDir);

							echo "<datalist name='dir' id='dir'>";
								while($dato1 = mysqli_fetch_array($resSelDir)){
                                    
									echo "<option value='".$dato1["id_direccion"]."' label='".$dato1["region"]." sobre la calle ".$dato1["calle"]."'/>";
									
										}
							echo "</datalist>";
						?>
						<div class="form-group">
                            <label for="direccion" class="control-label  col-md-offset-1 col-md-4">Dirección</label>
                            <div class="col-md-4">  
					  <input type="text" list="dir" class="form-control" id="direcciones" name="direcciones" placeholder="Lugar de los hechos">
                            <span class="help-block"></span>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="NoPatrulla" class="control-label  col-md-offset-1 col-md-4">Número de patrulla</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="NoPatrulla"  name="NoPatrulla" placeholder=" ejemplo 4852" />
                            <span class="help-block"></span>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="NomOfi" class="control-label col-md-offset-1 col-md-4">Nombre del oficial</label>
                            <div class="col-md-4">
                                <input type="text" name="NomOfi" class="form-control" id="NomOfi" placeholder="nombre del oficial" />
                            <span class="help-block"></span>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="situacion" class="control-label  col-md-offset-1 col-md-4">Situacion: </label>
                            <div class="col-md-4">
                                <textarea name="situacion" class="form-control" id="Situacion" placeholder="Aqui puedes escribir la situacion en la cual te viste envuelto" rows="4" maxlength="250" onKeyDown="cuenta()" onKeyUp="cuenta()"></textarea>
                            <input type="text" name=caracteres size=1 readonly="readonly">
                            </div>
                        </div>
                        
                        <div class="form-group">
    	                    <label class=" control-label col-xs-12  col-md-offset-1 col-md-4" for="">Cargar imagen:</label>
        <div class=" ">
        <input class="col-xs-12 col-md-4 btn btn btn-info" type="file" name="logo" id="logo"  role="button"/>
        </div>
    </div>
			<br>
			<br>
			<input class="btn btn-info" type="submit" value="Enviar" name="boton" id="boton">				
		</form>
            
            </center>
        </div>
        </div>
    
    <!--Termina cuerpo--->
    
    <!-- pie -->
    
    <div class="container">
            <div class="contorno">
         
         <section class="container-fluid infoContacto" >
             <div class="row">
                 <center>
                         <div class="logoInfo col-xs-12 col-sm-4 col-md-3"><img src="media/logos.png" width="160" height="100"></div></center>
                
                <div class="servicios col-xs-6 col-sm-4 col-md-2">
                    <h3>Servicios Acesoria</h3>
                        Contable Tributaria
                        Economica<br>
                        Gestion de Pymes
                </div>
                
                <div class="nosotros col-xs-6 col-sm-4 col-md-3">
                    <h3>Emergencia</h3>
                    <ol>
                        <li><a href="#">Protección Civil 8873435</a></li>
                        <li><a href="#">Policía Turística 8852277</a></li>
                        <li><a href="#">Seguridad Pública 8841913 / 8842342 8840710</a></li>
                        <li><a href="#">Policía Federal de Caminos 8841107 / 8841542 Comerciales</a></li>
                        <li><a href="#">Policía Judicial del Estado 8841171 / 8817150</a></li>
                        <li><a href="#">Procuraduría de Defensa al Turista 8924825</a></li>
                        <li><a href="#">Bomberos 8841202</a></li>
                        <li><a href="#">Cruz Roja Mexicana 8841616</a></li>
                    </ol>
                </div>
                
                <div class="socialNetwork col-xs-12 col-sm-12 col-md-4">
                   
                        <a href="http://www.derechoshumanos.gob.mx/es/Derechos_Humanos/Conoce_tus_derechos"><img src="media/derechos.jpg"/></a>
                    
                </div>
             </div>
         </section>
        <footer>
            <div class="container-fluid">
                <br>
            <p>© Sistema de Monitoreo de Seguridad Publica S.A de C.V. 2016. All rights reserved.
           <span style="float:right"><a href="#">Aviso de Privacidad</a></span></p>
            </div>
        </footer>
    </div>
    </div>
    <!--fin pie de paguina -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrips.js."></script>
</body>
</html>