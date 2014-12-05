
<?php
	
	require('conexionA.php');
	
	$id=$_GET['id'];
	
	$query="SELECT usuario, telefonico, email FROM acceder WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
        <center><h1><font face="monotype corsiva" size="7" color="white">Modificar Usuario</font></h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			 <footer id="ini">
			<table width="5%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <td width=""><b>Usuario:</b></td>
					<td width=""><input type="text" name="usuario" required="Campo vacio" maxlength="20" size="25" value="<?php echo $row['usuario']; ?>" /></td>  
                      </tr>	
				<tr>
					<td><b>Telefono:</b></td>
					<td><input type="text" name="telefonico" required="Campo vacio" maxlength="10" size="25" value="<?php echo $row['telefonico']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Email:</b></td>
					<td><input type="text" name="email" required="Campo vacio" maxlength="45"  required="Campo vacio" maxlength="10" size="25" value="<?php echo $row['email']; ?>" /></td>
				</tr>
                                
                                <tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" size="25" value="<?php echo $row['password']; ?>" /></td>
				</tr>
                                
                               
                          
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar Cambios" /></center></td>
				</tr>
			</table>
                </form></footer>
	</body>
</html>	
