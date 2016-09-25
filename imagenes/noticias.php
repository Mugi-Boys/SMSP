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
                <?php
                
                $query=" select * from denuncias";
                if($result=mysqli_query($conexion,$query)){
                    
                   echo "<table > \n"; 
           echo "<tr><td>Direccion</td><td>No_patrulla</td><td>Nombre oficial</td><td>Situacion</td><td>Foto</td><td>fecha</td></tr> \n"; 
          while ($row = mysqli_fetch_array($result)){ 
             
             echo "<tr><td>".$row["direccion"]."</td></tr> "; 
             echo "<td>".$row["No_patrulla"]."</td> "; 
             echo  "<td>".$row["Nombre_ofi"]."</td>"; 
             echo  "<td>".$row["situacion"]."</td> "; 
             echo  "<td><img src='imagenes/".$row["imagen"].".jpg'>/td>";
             echo   "<td>".$row["fecha-hora"]."</td></tr>"; 
             } 
            echo "</table> \n"; 

                }else{
                    echo "Error en la conexion";
                }
                ?>
            
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