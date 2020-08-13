<style type="text/css">
    	a { 
        text-decoration: none;
		background: #4AAE4A;
		padding: 16px; 
    	}
	
	body {
		background-image: url('images/pexels-lukas.jpg');
		/* Foto de Lukas no Pexels */
        	background-size: cover;
    	}
	
	#menu {
    	background: #4AAE4A;
    	padding: 16px;
	}
	
</style>

<div id="menu">
<a href="home.html">Home</a> | <a href="cadastro.html">Cadastrar Produto</a> | <a href="exibirTabela.php">Exibir tabela de Produtos</a>		
</div>
<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include('conexao.php'); // inclui o banco de dados a realizar a conexão.


    $name = $_POST['nome'];
    $price = $_POST['preco'];
    $amount = $_POST['quantidade'];
    $expirationDate = $_POST['validade'];


	$sql = "INSERT INTO produtos(nome, preco, quantidade, validade) VALUES ('$name','$price','$amount','$expirationDate')";

	if(mysqli_query($conexao,$sql)){
		echo"<br>Produto cadastrado com sucesso!!";
	}else{
		// echo"Erro!!".mysql_error(conexao);
		echo"Erro ao cadastrar";
	}

	mysqli_close($conexao);

?>
