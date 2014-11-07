

<link rel="stylesheet" href="estilos11.css">
	

<body background="1_1.jpg">
<?php
session_start();

mysql_connect('localhost','root','root','hotel_diana')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('acceder')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function formRegistro(){
?>
 <footer id="ini">
<form action="registrar.php" method="post">
Usuario: 
 <p> <input  type="text" name="username"    placeholder="Usuario" size="20" required="Campo vacio" maxlength="20" /><br />
Password: 
<p><input  type="password" name="password"    placeholder="Contraseña" required="Campo vacio" size="10" maxlength="10" /></p>
Confirma Password: <p><input  type="password" name="password2"  required="Campo vacio"   placeholder="Contraseña" size="10" maxlength="10" /><br /></p>
Email: 
<p><input  type="text" name="email"    placeholder="abcd@gmail.com" required="Campo vacio" size="20" maxlength="40" /><br /></p>
Numero Telefonico: 
<p><input  type="text" name="telefonico"  required="Campo vacio"  placeholder="Telefono" size="20" maxlength="10" /><br /></p>
<input type="submit" value="Registrar" /><input type="reset" />


</form></footer>
<?php
}

if (isset($_POST["username"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$password2 = $_POST["password2"];
	$email = $_POST["email"];
$telefonico = $_POST["telefonico"];
	// Hay campos en blanco
	if($username==NULL|$password==NULL|$password2==NULL|$email==NULL|$telefonico==NULL) {
		?> 
<script language="javascript"> 
alert("Uno o varios campos estan vacios, Porfavor registrese correctamente .");
window.location="registrar.php";
</script> 
<?php 
		formRegistro();
	}else{
		
		if($password!=$password2) {
                    
      
			?> 
<script language="javascript"> 
alert("Las contraseñas no coinciden, Porfavor registrese nuevamente.");
window.location="registrar.php";
</script> 
<?php 
			formRegistro();
		}else{
			
			$checkuser = mysql_query("SELECT usuario FROM acceder WHERE usuario='$username'");
			$username_exist = mysql_num_rows($checkuser);
			$checkemail = mysql_query("SELECT email FROM acceder WHERE email='$email'");
			$email_exist = mysql_num_rows($checkemail);
			if ($email_exist>0|$username_exist>0) {
                            
                            		?> 
<script language="javascript"> 
alert("El nombre de usuario o la cuenta de correo estan ya en uso, Porfavor registrese correctamente .");
window.location="registrar.php";
</script> 
<?php
				formRegistro();
			}else{
				$query = 'INSERT INTO acceder (usuario, password, email,  telefonico, fecha)
				VALUES (\''.$username.'\',\''.$password.'\',\''.$email.'\',\''.$telefonico.'\',\''.date("Y-m-d").'\')';
				mysql_query($query) or die(mysql_error());
				//echo '<p><font face="monotype corsiva" size="5" color="red"><center> El usuario '.$username.' ha sido registrado de manera satisfactoria.</center></font><br /></p>';
				//echo '<p><font face="monotype corsiva" size="5" color="blue"> <center>Ahora puede entrar ingresando su usuario y su password </center></font><br /></p>';
				?>
				

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
Usuario:<p><input  type="text" name="usuario" size="20"  placeholder="Usuario" maxlength="20" required="Campo vacio" />
<br /></p>

     
                     

Password:<p><input  type="password" name="password" size="10"    placeholder="Contraseña" maxlength="10" required="Campo vacio" /></p>
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
	</aside>';
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

				<?php
			}
		}
	}
}else{
	formRegistro();
}
?>

</body>
</html>
