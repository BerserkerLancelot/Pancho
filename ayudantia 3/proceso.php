//tabla que tenga de tres a cinco campos, da lo mismo que sean
//crear archivo php que se conecte a la base de datos y funcion que e rescate los datos de esa tabla
// archivo html que tenga estilos de bootstrap y un script de ajax cuando se haga clic en un boton que consulte el php anteriormente creado y el php devuelve los datos de la BD y los muestre en el html


<?php  
//tomamos los datos del archivo conexion.php  
include("conexion.php");  
$link = Conectarse();  
//se envia la consulta  
$result = mysql_query("SELECT * FROM persona", $link);  
//se despliega el resultado  
echo "<table>";  
echo "<tr>";  
echo "<th>Nombre</th>";  
echo "<th>Id</th>";  
echo "<th>Edad</th>";  
echo "</tr>";  
while ($row = mysql_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>".$row[5]."</td>";  
    echo "<td>".$row[7]."</td>";  
    echo "<td>".$row[4]."</td>";  
    echo "</tr>";  
}  
echo "</table>";  
	}
 ?>