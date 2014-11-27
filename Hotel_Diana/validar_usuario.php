 <?php 

            $sql='insert into';
            $retorno='';
            $ret=0;

            if (isset($_POST['tabla'])){

              $tabla=$_POST['tabla'];
              $sql=$sql.$tabla.'values(';
              

            if(isset($_POST['id']) && isset($_POST['usuario']) && isset($_POST['password']) 
              && isset($_POST['descripcion']) && isset($_POST['email']) && isset($_POST['fecha']) && isset($_POST['telefonico']))
            {
                $id=$_POST['id'];
                $usuario=$_POST['usuario'];
                $password=$_POST['password'];
                $des=$_POST['descripcion'];
                $email=$_POST['email'];
                $f=$_POST['fecha'];
                $te=$_POST['telefonico'];

                $sql=$sql."'$id','$usuario', '$password', '$des', '$email', '$f', '$te')";

            
          $retorno='validar_usuario.php';
            }else{
              die('Error de datos')
            }
        }
          require_once 'config.php';

            $conexion=mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$base);
            $ret=1;
            $res=mysqli_query($conexion, $sql) or $ret=0;

            header('Location: ../'.$retorno.'?res='.$ret);  

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

        
