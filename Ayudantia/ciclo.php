<?php 

while ($i <= 5){
	echo "hello you stupid bitch";
	echo "<br>";
	$i++;

}


$i=['rojo', 'amarillo', 'verde'];

echo "<pre>";
print_r($i);
echo "</pre>";

foreach ($i as $key => $value) {

	echo"posicion ".$key." mi valor es ".$value;
	echo "<br>";
}

 ?>