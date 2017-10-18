<?php 
date_default_timezone_set('America/Santiago');
$archivo=fopen("archivo.txt","a")
or die ("problemas al abrir archivo");


$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
$rut = $_REQUEST['rut'];

fwrite($archivo, "Datos:");
fwrite($archivo, "<br>");
fwrite($archivo, $nombre);
fwrite($archivo, "<br>");
fwrite($archivo, $edad);
fwrite($archivo, "<br>");
fwrite($archivo, $rut);
fwrite($archivo, "<br>");
fwrite($archivo, date('l jS \of F Y h:i:s A'));
fwrite($archivo, "<br>");
fwrite($archivo, $_SERVER['REMOTE_ADDR']);
fwrite($archivo, "<br>");
fclose ($archivo);



echo $nombre."<br>";
echo $edad."<br>";
echo $rut."<br>";
echo "IP Share: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo date('l jS \of F Y h:i:s A');

 ?>