<style type="text/css">

        a { 
            text-decoration: none; 
        }

        body {
		    background-image: url('images/pexels-lukas-349610.jpg');
		    /* Foto de Lukas no Pexels */
            background-size: cover;
        }

        #menu {
    	    background: #4AAE4A;
    	    padding: 16px;
        }
         	   
</style>

<div id="menu">
<a href="home.html">Home</a> | <a href="cadastro.html">Cadastrar Produto</a>		
</div>

<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include('conexao.php');

        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($conexao, $sql) or die ("Erro na consulta!");

         echo "<br> <strong>TABELAS DE PRODUTOS:</strong> <br>";

        while($registro = mysqli_fetch_array($resultado)){
            $idProduto = $registro['idProduto'];
            $nome = $registro['nome'];
            $preco = $registro['preco'];
            $quantidade = $registro['quantidade'];
            $validade = $registro['validade']; 

            echo"<table border='2' cellpadding=10>";
            echo"<tr><th>Nome</th>"
                ."<th>Preço</th>"
                ."<th>Quantidade</th>"
                ."<th>Validade</th>"
                ."<th>Ações</th>"
             ."</tr>"; 
            echo"<tr><td>$nome</td>"
                ."<td>$preco</td>"
                ."<td>$quantidade</td>"
                ."<td>$validade </td>"
                ."<td> <a href='deletar.php?idProduto=$idProduto'> Deletar </a> | <a href='editar.html?idProduto=$idProduto'> Editar</a> </td>"
             ."</tr>";
             echo"<br>";

        }
         
?>
 
</table>
