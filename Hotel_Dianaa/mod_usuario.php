<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$usuario=$_POST['usuario'];
	$telefonico=$_POST['telefonico'];
	$email=$_POST['email'];
      
        
        
        	?> 
<script language="javascript"> 
alert("Esta seguro que quiere modificar este Usuario .");
window.location="login1.php";
</script> 
<?php 
	
	$query="UPDATE acceder SET usuario='$usuario', telefonico='$telefonico', email='$email' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body >
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
                  
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
                        
			
		</center>
	</body>
</html>
				
				