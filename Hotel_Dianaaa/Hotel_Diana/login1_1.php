
<?php
	
	require 'conexionA.php';
?>

<?php
	
	
	$query='SELECT  * FROM acceder';
	
	$resultado=$mysqli->query($query);
	
?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hotel Diana</title>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

      
	
          			 <center><h1><font face="monotype corsiva" size="7" color="white">Hotel Diana </font></h1></center>																																																																																		
		
                                 <p></p>   
                                                     
                    
    <center>
		<table border=1 width="80%">
			<thead>
                            <tr>
					<td><b><font face="monotype corsiva" size="4" color="brown">Usuario</font></b></td>
					<td><b><font face="monotype corsiva" size="4" color="brown">Email</font></b></td>
                                        
                                        <td><b><font face="monotype corsiva" size="4" color="brown">Telefono</font></b></td>
                                        <td><b><font face="monotype corsiva" size="4" color="brown">Password</font></b></td>
                                        <td><b><font face="monotype corsiva" size="3" color="brown">Fecha de Registro</font></b></td>
                                      
					<td></td>
					<td></td>
                       </tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['usuario'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
                                                        
                                                        <td>
								<?php echo $row['telefonico'];?>
							</td>
                                                        
                                                        <td>
								<?php echo $row['password'];?>
							</td>
                                                          <td>
								<?php echo $row['fecha'];?>
							</td>
                                                        
                                                        
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
	
    </center>
                    
                    
           
                                                    
                                                             
                                                    
		
    
	
</html>

   
      
             
 

              
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            
                          
			