<?php

#Condicionais de forma contraida

$login = "admin";
$resultado = false;

/*
if ($login == "admin") {
	$resultado = true;
}else{
	$resultado = false;
}
*/

#Condicionais de forma contraida
$resultado = $login=="admin"?$x=true:$x=false; //Isso e um if-else
echo "Esse e o resultado: $resultado e o X e: $x";

?>