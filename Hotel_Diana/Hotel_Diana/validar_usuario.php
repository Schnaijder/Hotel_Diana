<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','root','acceder')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('acceder')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

	function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;

}

if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{

	$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
	$password = $_POST["password"];
	$result = mysql_query('SELECT password, usuario FROM acceder WHERE usuario=\''.$usuario.'\'');
	if($row = mysql_fetch_array($result)){
		if($row["password"] == $password){
			$_SESSION["k_username"] = $row['usuario'];
			?>
		<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Diana</title>
        <meta charset="UTF-8">
        
 
        <link rel="stylesheet" href="estilos.css">
       
  

    </head>
    
   
    
        
       
    
     <body bgcolor="black" >
   
        
         <section id="caja1">
             
              <marquee behavior="alternate" scrollamount="3" scrolldalay="200" direction="center" aling="middle">
                             <tr>
                           
                         <tr><img src="Tocador.jpg"  height="300" /></tr>
        <img src="Recepcion.jpg"  height="300" />
        <img src="sala.jpg"  height="300" />
        <img src="restaurant.jpg"  height="300" />
                         </marquee>
             
             
             
             
         </section>
        
        
        
        
        
        
        
         <header id="logo"></header>
       
        
        
       <header id="cajagrande">
           
           
   <div id="caja6"><font face="monotype corsiva" size="8" color="white">HOTEL DIANA</font></div>
  
            <nav>
              
                <ul>
                    
                    <li><a href = "#">Inicio</a></li>
                             <li><a href = "#">Habitaciones</a>
                                 <ul>
                                       <li><a href = "#">Privadas</a></li>
                                       <li><a href = "#">Sencillas</a></li>
                                     <li><a href = "#">Medianas</a></li>
                                 </ul>
                             </li>
                                      <li><a href = "#">Servicios</a>
                                          
                                           <ul>
                                       <li><a href = "#">Internet</a></li>
                                       <li><a href = "#">Estacionamiento</a></li>
                                     <li><a href = "#">Albercas</a></li>
                                 </ul>
                                      </li>
                                               <li><a href = "#">Horarios</a>
                                                    <ul>
                                       <li><a href = "#">Dia</a></li>
                                       <li><a href = "#">Noche</a></li>
                                    
                                 </ul>
                                               </li>         
                                                                 <li><a href="reglamento.html">Reglamento</a></li>
                                                                 <li><a href = "#">Contactanos</a>
                                                                         <ul>
                                       <li><a href = "#">Telefono</a></li>
                                       <li><a href = "#">Informacion</a></li>
                                    
                                 </ul>
                                                                 </li>
                </ul>                                                             
                    
                <section id="reservacion">
                     <!--Nuevo Motor-->
                        <?php 
                         $fo_reserv
                         $id_usr
                         $fo_hab
                         $


                        ?>
     
            <tr>
                <th><font color="white" face="Monotype corsiva" size="5" ><center> Reservación En Línea</center></font></th>
            </tr>
            <tr><td>
            <div class="etWContainer">
			<div class="etWtabs">
				
				
			</div>
			<div class="etWforms">
				<form accept-charset="UTF-8" id="formahotel" class="form" name="formahotel" method="post" action="http://www.e-tsw.com.mx/Hoteles/Tarifas">
					
					<div class="etWrow2">
                                            <p><label><font color="#7438ee" face="Monotype corsiva" size="4" ><center>Fecha de Llegada:</center></font></label></p>
                                            <center><input type="date" id="Fecha"></center>
					</div>
					<div class="etWrow2">
                                            <label><font color="#7438ee" face="Monotype corsiva" size="4" ><center>Fecha de Salida:</center></font></label>
                                            <center><input type="date" id="Fecha"></center>
					</div>
					<div class="EtBxLine"></div>
					<div class="etWrow">
						<div class="etWheader">
                                                    
                                                    
                                                    <label><font color="#7438ee" face="Monotype corsiva" size="4" ><center>Tipo de habitacion:</center></font></label>
            
                                                    
                                                    <center> <div class="etWSelect rm etWSmall"><select name="rm">
                                                      
							<option value="1">Sencilla</option>
							<option value="2">Grande</option>
							<option value="3">Doble</option>
           
							
                                                            </select><span></span></div>
                                                    </center>
                                                   <label><font color="#7438ee" face="Monotype corsiva" size="4" ><center>Personas:</center>
                                                            </font></label>
            
                                                    <center>
                                                         <div class="etWSelect rm etWSmall"><select name="rm">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
                                                            </select><span></span></div></center>
                                                    
                                                        

                                                         
                                                        
                                                         <p>  <center>
                                                             <div class="button">
						<input type="submit" value="Registrar"/>
                                                             </div></center>
                                                     </p>
				</form>
				
								
			</div>
		</div>
        </td></tr>
            <!--Fin Nuevo Motor--> 
            
                    </section>
                   
            </nav>
   
   
                         
                         <section id="mapa1"  >
    
        
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?
AIzaSyAR_MeZWQsdoXRCZ9VXRIQ_kCRqBuQ2Q2o&sensor=true"> 
    </script>        
       
    </head>
    <body onload="initialize()">
      
                              
        </section>
  
                   <section id="lema">
            <div class="container">
                <p> <font color="white" face="arial" size="4">  EN EL HOTEL DIANA DISFRUTA DE </font><br /><strong> <font color="#fbe87d" face="arial" size="5">UNA ESTANCIA MARAVILLOSA EN EL MEJOR EDIFICIO EMBLEMATICO </font></strong></p>
            </div>
        </section> <!-- fin lema  -->  
                         
   
                         <footer id="pie">
                         <footer id="redes">
                         


        <a id="colorredes">
                <section id="Facebook">
                       </section>
                    <section id="twitter">
                             </section> 
                        <section id="gplus">
                                 
                               </section>  
                          <section id="instagram">
                                 
                               </section> 
            <section id="youtube">
                                 
                               </section> 
                  
                  
                    

	   <ul>
      
        <li><a href= title= Siguenos en Facebook class="siguenos-facebook" ><span>Siguenos en Facebook</span></a></li>
        
       
        <li><a href=title= Siguenos en Twitter class="siguenos-twitter" ><span>Siguenos en Twitter</span></a></li>
        <li><a href=title= Siguenos en Google class="siguenos-google-plus" ><span> Siguenos en GPlus</span></a></li>
   
        <li><a href= title= Siguenos en Instagram class="siguenos-instagram" ><span> Siguenos Instagram</span></a></li>
        <li ><a href= title= Siguenos en Youtube class="siguenos-youtube" ><span> Siguenos en Youtube</span></a></li>
      </ul >
	 </a>
	

 </footer>

</footer>
</header>
         
                 
  
</body>
</html>
        
       
   
      
             
          
        
        
        
        
               <?php
		}else{
                    
                    
                    
                  
		echo'Password incorrecto';
		}
	}else{
            
            	?> 
<script language="javascript"> 
alert("El Usuario y contraseña no existente en la base de datos.");
window.location="index.php";
</script> 
<?php 
		
	}
	mysql_free_result($result);
}else{
    
       	?> 
<script language="javascript"> 
alert("Debe especificar un usuario y password.");
window.location="index.php";
</script> 
<?php 
	
	
}
mysql_close();
?>

        
