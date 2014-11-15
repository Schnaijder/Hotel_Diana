<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
  
    </head>
    <body>

      
<link rel="stylesheet" href="estilos11.css">


<title>Bienvenidos - Hotel Diana</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="estilos1.css">
<style type="text/css">
    
img {display: block;}.pie-pag {
	font-size: x-small;
	color: #AF966D;
}
</style>


</head>
<body bgcolor="#ffffff" onload="">
    
    
           
           
  
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
    
   
  <tr>
      
      
  <section id="cafe">
      
      
      
        <aside id="inicio">
<p><form action="validar_usuario.php" method="post">
    Usuario: <p><input placeholder="Usuario" type="text" name="usuario" size="20" maxlength="20" required="Campo vacio" />
    		

   
<br /></p>
    Password:<p><input placeholder="Contraseña" type="password" name="password" size="10" maxlength="10" required="Campo vacio" /></p>
    <br />
 <section id="caja2"><input type="submit" value="Ingresar" />
</form></section>

<?php
session_start();
?>

<?php

if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="logout.php">Logout</a></p>';
}else{
	echo '<p><a href="index.php"></a></p>
	 <p><section id="caja1"><a href="registrar.php"><font color="white"> <center>Registrar</center></font></a></section></aside></p>';
}
?>
      
      
       <div id="caja6">
       <font face="monotype corsiva" size="8" color="#fa463d">HOTEL DIANA</font></div>
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
      <section id="cama">
  </section>
   <section id="diana2">
  </section>
   <section id="diana3">
  </section>
  <section id="diana">
      
   <td colspan="5"><img name="1" src="img/23.jpg" width="1003" height="545" border="0" id="index_r1_c1" alt="" /></td>
 </section>
  </tr>
   
  
</table>
<table width="1003" border="0" align="center" cellspacing="1">
  <tr>
    <td width="17%" align="center" valign="middle" class="pie-pag"><img src="img/circulo.jpg" width="78" height="91" align="absmiddle" /></td>
    <td width="17%" align="center" valign="middle" class="pie-pag"><img src="img/distintivo-h.jpg" width="89" height="91" align="absmiddle" /></td>
    <td width="17%" align="center" valign="middle" class="pie-pag"><img src="img/images.jpg" width="91" height="91" align="absmiddle" /></td>
    <td width="49%" align="center" valign="middle" class="pie-pag">© Copyright. Todos los derechos reservados <strong>Hotel Diana Cd. Altamirano. Guerero</strong> <br />
       Programacion Web.<a href="http://www.Schnaijder_ayala.com" target="_blank">www.Ayala.com</a></td>

  </tr>
</table>
    
    
    
    
    
    
    </body>
</html>
