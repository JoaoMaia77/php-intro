<?php
	function mostrarNome($nome,$idade){
		echo '<h2>Nome e: </h2>'.$nome;
		echo '<hr>';
		echo "Idade: $idade";
	}

	function calculadora($numero1 = 10,$numero2 = 5){
		echo ($numero1+$numero2);
	}

	function verdade(){
		return true;
	}

	function retornarString(){
		return 'Guilherme';
	}

	function ola(){
		return "ola mundo";
	}

	echo retornarString();

	$variavel = verdade();

	//calculadora(20,30);
?>


<html>

	<head>
		<meta charset="utf8">
		<title> </title>
	</head>

	<body>
		<h1>"Olá Mundo" </h1>
	</body>

</html>