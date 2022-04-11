<?php
	/*
		Arrays = Variáveis com diversas chaves!
	*/
	
	//$nome = array('Guilherme','Joao','Felipe');

	//$nome[] = 'Joao';
	//$nome[] = 'Felipe';
	
	//$nome[0] = 'Joao';

	//$nome[100] = 'Felipe';

	//$variaveis = ['Guilherme','Joao','Felipe'];

	//echo $variaveis[0];

	//$variaveis = array('Guilherme',23,true,10.09);



	$informacao['nome'] = 'Guilherme';
	$informacao['idade'] = 23;
	$informacao['cidade'] = 'Florianópolis';

	echo $informacao['nome'];
	echo '<br />';
	echo $informacao['idade'];
	echo '<br />';
	echo $informacao['cidade'];


/*
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
// print_r($categorias)
$nome = 'Eduardo';
$idade = 25;
//var_dump($nome);
//var_dump($idade);
if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            echo "Nadador $nome compete na catagoria infantil";
        }
    }
}else if($idade>= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolecente'){
            echo "Nadador $nome compete na catagoria adolecente";
        }
    }
}else if($idade > 18 && $idade <= 50 ){
for ($i = 0; $i <= count($categorias); $i++){
    if ($categorias[$i] == 'adulto'){
        echo "Nadador $nome compete na categoria adulto";
        }
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'idoso'){
            echo "Nadador $nome compete na catagoria idoso";
        }
    }
}

*/
/*
$preco = [];
$preco[] = 'barato';
$preco[] = 'intermediario';
$preco[] = 'caro';

$nome = 'Camisa';
$valor = 100;

if($valor >= 1 && $valor <= 25){
    for($i = 0; $i <= count($preco); $i++){
        if ($preco[$i] == 'barato'){
            echo "O produto: $nome é barato.";
        }
    }
}else if($valor > 25 && $valor <= 50){
    for($i = 0; $i <= count($preco); $i++){
        if($preco[$i] == 'intermediario'){
            echo "O produto: $nome é intermediario.";
        }
    }
}else{
    for($i = 0; $i <= count($preco); $i++){
        if($preco[$i] == 'caro'){
            echo "O produto: $nome é caro.";
        }
    }
}
*/
?>