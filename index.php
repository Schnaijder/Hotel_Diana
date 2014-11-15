<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="admin1.css">
        <link rel="stylesheet" href="estilos11.css">
        <link rel="stylesheet" href="estilos1.css">
    </head>
    <body>
        <title>Bienvenidos - Hotel Diana</title>    
        <section id="mov">
        <section id="cafe">
        <aside id="inicio">
        <p><form action="validar_usuario.php" method="post"></
        Usuario: <p><input placeholder="Usuario" type="text" name="usuario" size="20" maxlength="20" required="Campo vacio"/>
        <br /></p>
        Password:<p><input placeholder="Contraseña" type="password" name="password" size="10" 
            maxlength="10" required="Campo vacio" /></p>
        <br/>
        <section id="caja2"><input type="submit" value="Ingresar" />
        </form></section></aside>
    
<?php
session_start();
?>
<?php
if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="logout.php">Restablecer</a></p>';
}else{
	echo '<p><a href="index.php"></a></p>
	 <p><section id="caja1"><a href="registrar.php"><font color="white"> 
         <center>Registrar</center></font></a></section></aside></p>';
}
?> 
      
       <div id="caja6">
       <font face="monotype corsiva" size="7" color="#fa463d">HOTEL DIANA</font></div>
<!--     <div id="boton">
    <a href="segunda.html"><font face="monotype corsiva" size="5" color="white">Entrar</font></a>
     </div>-->
       <section id="caja">
           
           <div id="letra">
               <font face="monotype corsiva" size="5" color="white"><p>Cd. Altamirano.Gro C.P 40730; Guerrero Mexico.</p></font></div>
  </section>
  
 
       <section id="logo">
  </section>
  </section>
  
  <section id="galeria">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Sliding Image Panels with CSS3" />
        <meta name="keywords" content="sliding, background-image, css3, panel, images, slider" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
    </head>
    <body bgcolor="black">
        <section class="cr-container">
				
            <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
            <label for="select-img-1" class="cr-label-img-1">1</label>
				
            <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
            <label for="select-img-2" class="cr-label-img-2">2</label>
				
            <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
            <label for="select-img-3" class="cr-label-img-3">3</label>
				
            <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
            <label for="select-img-4" class="cr-label-img-4">4</label>
				
            <div class="clr"></div>	
            <div class="cr-bgimg">
					
		<div>
                    <span>Slice 2 - Image 1</span>
                    <span>Slice 2 - Image 2</span>
                    <span>Slice 2 - Image 3</span>
                    <span>Slice 2 - Image 4</span>
		</div>
					
            </div>
		<div class="cr-titles">
                    <h3><span>Hotel Diana</span><span>Te ofrece un buen servicio</span></h3>
                    <h3><span>Estacionamiento</span><span>Con estacionamiento gratis!</span></h3>
                    <h3><span>Camas King Size</span><span>Para una buena comodidad.</span></h3>
                    <h3><span>Cuartos familiares</span><span>Una mejor comodidad en familia.</span></h3>
		</div>
	</section>
        </div>
    </body>
</html>
  
  </section> 
</section>

    
<section id="loguitos">
<table width="1003" border="0" align="center" cellspacing="1">
  <tr>
    <td width="17%" align="center" valign="middle" class="pie-pag">
        <img src="img/circulo.jpg" width="78" height="91" align="absmiddle" /></td>
    <td width="17%" align="center" valign="middle" class="pie-pag">
        <img src="img/distintivo-h.jpg" width="89" height="91" align="absmiddle" /></td>
    <td width="17%" align="center" valign="middle" class="pie-pag">
        <img src="img/images.jpg" width="91" height="91" align="absmiddle" /></td>
    <td width="49%" align="center" valign="middle" class="pie-pag">© Copyright. Todos los derechos reservados <strong>Hotel Diana Cd. Altamirano. Guerero</strong> <br />
       Programacion Web.<a href="http://www.Schnaijder_ayala.com" target="_blank">www.Ayala.com</a></td>

  </tr>
</table>
        </section>
    </body>
</html>
