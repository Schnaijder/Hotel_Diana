<?php 
	
	require('conexionA.php');
	
	$id=$_GET['id'];
        
            
        	?> 
<script language="javascript"> 
alert("Esta seguro que quiere Eliminar este Usuario .");
window.location="login1.php";
</script> 
<?php 
	
	$query="DELETE FROM acceder WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
                 
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
                       
			
		</center>
	</body>
</html>