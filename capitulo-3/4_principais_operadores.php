<?php
$titulo = "Principais Operadores";


?>
<html>
<head>
	<title><?=$titulo?></title>
	<h1><?=$titulo?></h1>
</head>
<body>
<?php
	$x = 10;
	$y = 5;
	#Soma
	$soma = $x + $y;
	#Subtrai
	$subtrai = $x - $y;
	#Multiplica
	$multiplica = $x * $y;
	#Divide
	$divide = $x / $y;

	$soma2 = $soma;
	#Com operador ++
	$soma2++;

	#Com +=
	$soma3 = $soma2;
	$soma3+=5;

	#Concatenar com echo
	$primeiro_nome = "joão";
	$ultimo_nome = " de Almeida Santos";

	#Concatenar com ".="
	$nomes = "School";
	$sobrenomes = " of Net";

	$nomes .= $sobrenomes;
?>
<h3><?=print("Operação de Soma: $soma");?></h3>
<h3><?=print("Operação de Subtração: $subtrai");?></h3>
<h3><?=print("Operação de Multiplicação: $multiplica");?></h3>
<h3><?=print("Operação de Divisão: $divide");?></h3>

<h3><?=print("Operação de Soma com ++: $soma2");?></h3>
<h3><?=print("Operação de Soma com += 5: $soma3");?></h3>

<h3><?php echo $primeiro_nome.$ultimo_nome?></h3>

<p><?=print("Nome: $nomes");?> <br />
<?=print("Sobrenome: $sobrenomes");?></p>

<h3><?php echo $nomes.$sobrenomes?></h3>

</body>
</html>