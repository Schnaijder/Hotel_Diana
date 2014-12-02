<body background="bg.jpg">
<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("acceder",$con); 
$sql="select * from acceder where usuario ='pablo'"; 
$datos=mysql_query($sql,$con);
?>

	<table border=1 width="80%">
			<thead>
                            <tr><center>
					<td><b><font face="monotype corsiva" size="4" color="brown">Usuario</font></b></td>
					<td><b><font face="monotype corsiva" size="4" color="brown">Email</font></b></td>
                                        
                                        <td><b><font face="monotype corsiva" size="4" color="brown">Telefono</font></b></td>
                                        <td><b><font face="monotype corsiva" size="4" color="brown">Password</font></b></td>
                                        <td><b><font face="monotype corsiva" size="3" color="brown">Fecha de Registro</font></b></td>
                                        
                                        
					<td></td>
					<td></td>
                        </center></tr>
				<tbody>
					<?php while ($row=mysql_fetch_array($datos)) { ?>
						<tr>
							<td><?php echo $usuario=$row['usuario']; ?>
							</td>
							<td>
								<?php echo  $password=$row['password'];?>
							</td>
                                                        
                                                        <td>
								<?php echo $email=$row['email'];?>
							</td>
                                                        
                                                        <td>
								<?php echo   $telefonico=$row['telefonico'];?>
							</td>
                                                          <td>
								<?php echo      $fecha=$row['fecha'];?>
                                                              
                                                              
                                                              
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
		</body>
	</html>	
	
