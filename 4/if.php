<?php

$x = 1; //Operador de atribuição
$y = 2; //Operador de atribuição
$z = 3; //Operador de atribuição

if (1==1) { //Operador de Comparação
	echo "Realmente 1 e igual a 1 <br />";
}

if ($x==1) {
	echo "Realmente X e igual a 1 <br />";
}

if ($x > 1) {
	echo "X e maior que 1 <br />";
}

if ($x >= 1) {
	echo "X e maior ou igual 1 <br />";
}

if ($x < 1) {
	echo "X e menor que 1 <br />";
}

if ($x <= 1) {
	echo "X e menor ou igual a 1 <br />";
}

//Regra condicional mais complexa

if ($x == 1 and $x < 10) {
	echo "X e igual a 1 e menor que 10 <br />";
}

if ($x == 1 or $x < 10) {
	echo "X e igual a 1 ou menor que 10 <br />";	
}

$e = true;

if ($e) {
	echo "E e igual a TRUE !!! <br />";
}

?>