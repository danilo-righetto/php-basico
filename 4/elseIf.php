<?php

$login = "admin";
$senha = 1234;

if ($login == "admin" and $senha == 1234) {
	echo "Usuario logado!!! <br />";
}elseif ($login == "admin" and $senha <> 1234) {
	echo "A senha para esse usuario esta incorreta!!! <br />";
}else {
	echo "Nao foi possivel conectar no sistema!!! <br />";
	echo "Erro ao efetuar login.";
}

?>