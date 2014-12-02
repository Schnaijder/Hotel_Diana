<?php
	
	
	

mysql_connect('localhost','root','root','acceder')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('hotel')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	
?>