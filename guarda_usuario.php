<?php 
	
	require('conexion.php');
	
	$usuario=$_POST['usuario'];
	$password=$_POST['telefonico'];
	$email=$_POST['email'];
	$fecha_llegada=$_POST['fecha_llegada'];
	$fecha_salida=$_POST['fecha_salida'];
	$query="INSERT INTO acceder(usuario, telefonico, email, fecha_llegada, fecha_salida) VALUES ('$usuario','$telefonico','$email','$fecha_llegada','$fecha_salida')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
                    <h1><font face="monotype corsiva" size="7" color="white">Usuario Guardado</font></h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
                        <a href="index1.php"><font face="monotype corsiva" size="6" color="red">Regresar</font></a>
			
		</center>
	</body>
	</html>	