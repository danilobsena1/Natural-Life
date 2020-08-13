<?php

//url de conexão
//$conexao =  variavel que vai receber a conexão.
$conexao = mysqli_connect('localhost','danilo','','hortifruti');

if($conexao){ // Se a conexao ocorrer
	// echo"Conexão efetuada com sucesso!";
} else{
	die('Não foi possivel estabelecer conexão'); //Para erro é bom utilizar o die
	}
?>
