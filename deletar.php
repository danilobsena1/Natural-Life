<style type="text/css">
			a { 
                text-decoration: none; 
            }
            
            #menu {
    	    /* background: #12181F; */
    	    background: #4AAE4A;
    	    padding: 16px;
 	   	    /* margin: auto;    */
       		}         	   
</style>

<div id="menu">
<a href="home.html">Home</a> | <a href="cadastro.html">Cadastrar Produto</a> | <a href="exibirTabela.php">Exibir tabela de Produtos</a>		
</div>

<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

	include('conexao.php');

	$idProd = $_GET['idProduto'];
	
	$sql = "DELETE FROM produtos WHERE idProduto = $idProd";

	if ($conexao->query($sql) === TRUE) {

		echo "<center> ";

	echo "Deletado com Sucesso <br>";

	}
	else{
        echo "erro <br>".mysqli_error($conexao);
    }
    ?>