<?php
	#Jogo do "Pense em um numero"
	#Numero pensado
	$x = 50;

	$valor_soma = 4;

	#Resultado do jogo
	$resultado = ((($x * 2) + $valor_soma) / 2) - $x;

	#O resultado sempre será 5
?>

<html>
<head>
	<title>Jogo</title>
	<h1>Jogo do "Pense em um número"</h1>
</head>
<body>
	<h2><?php print("Pense em um número!");?></h2>
	<h3><?php print("Multiplicando esse número por 2
	somando 10, dividindo por 2 e subtraindo pelo número que você pensou 
	o resultado será: $resultado !");?></h3>

</body>
</html>

