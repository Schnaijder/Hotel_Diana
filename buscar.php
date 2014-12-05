
<html> 
<body> 
  
<?php 
if (!isset($buscar)){ 
      echo "Debe especificar una cadena a buscar"; 
      echo ""; 
      exit; 
} 
$link = mysql_connect("localhost", "root"); 
mysql_select_db("acceder", $link); 
$result = mysql_query("SELECT * FROM acceder WHERE usuario LIKE '%$buscar%' ORDER BY usuario", $link); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["password"]."</td> \n"; 
            echo "<td>".$row["telefonico"]."</td> \n"; 
            echo "<td><a href='email:".$row["email"]."'>".$row["email"]."</a></td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
  
</body> 
</html> 