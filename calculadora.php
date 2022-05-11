<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<body>
	<form action="calculadora.php" method="POST">
    	<p>Escolha uma operação</p>
    	<input type="radio" value="soma" name="opcao" />Soma </br>
    	<input type="radio" value="sub" name="opcao" />Subtração </br>
    	<input type="radio" value="div" name="opcao" />Divisão </br>
    	<input type="radio" value="mult" name="opcao" />Multiplicação </br>
		
		<p>Digite os valores: </p>
		<input type="number" name="a">
		<input type="number" name="b"><br>
		<input type="submit" class="submit" value="Calcular" name="" />
	</form>	
 
	<?php
		$numero1=(int)$_POST['a'];
		$numero2=(int)$_POST['b'];     
		$operacao=$_POST['opcao'];
		
		switch( $operacao ){
			case 'soma':$operador='+';$resultado=$numero1 + $numero2;break;
			case 'sub':$operador='-';$resultado=$numero1 - $numero2;break;
			case 'div':$operador='/';$resultado=$numero1 / $numero2;break;
			case 'mult':$operador='*';$resultado=$numero1 * $numero2;break;
		}
		
		printf(
			'%s %s %s = %d',
			$numero1,
			$operador,
			$numero2,
			$resultado
		);
	?>
</body>
</html>
