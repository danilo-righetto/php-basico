<?php

$x = 1;

if ($x == 1) {
	echo "X e igual a 1 !!! <br />";
}else{ //As {} são opicionais quando temos apenas um bloco
	echo "X nao e igual a 1 !!! <br />";
}

$login = "admin";
$senha = 1234;

if ($login == "admin" and $senha == 1234) {
	echo "Logado no sistema!";
}else{
	echo "Usuario ou senha invalidos!!!";
}

?>