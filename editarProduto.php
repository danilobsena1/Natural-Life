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

    // $idProd = $_GET['idProduto'];
    
	$nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];

    $sql = "UPDATE produtos SET nome = '$nome',
        preco = '$preco', quantidade = '$quantidade', validade = '$validade' WHERE nome = '$nome'";           
    
    if($sql == TRUE){
        echo "Dados editados com sucesso!";
    }
    else {
        echo "Erro ao editar dados";
    }
    $resultado = mysqli_query($conexao, $sql) or die ("Erro na Consulta"); 
    
    mysqli_close($conexao);

    ?>