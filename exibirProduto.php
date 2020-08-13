<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include('conexao.php');

echo"<a href='home.html'>Home</a> | <a href='cadastro.html'>Cadastrar Produto</a><br/><br/>";

$produto = $_POST['nome'];

$buscar = $_POST['Buscar'];

if (isset($buscar)) {

$sql = "SELECT * FROM produtos WHERE nome = '$produto'";

$resultado = mysqli_query($conexao, $sql) or die ("Erro na consulta!");

if (mysqli_num_rows($resultado)<=0){
    echo"<script language='javascript' type='text/javascript'>
        alert('Produto indisponivel');window.location
        .href='home.html';</script>";
        die();
    }
    else{

while($registro = mysqli_fetch_array($resultado)){ // mysqli_fetch_array = permite obter os resultados de uma consulta sql.
    $idProduto = $registro['idProduto'];
    $nome = $registro['nome'];
    $preco = $registro['preco'];
    $quantidade = $registro['quantidade'];
    $validade = $registro['validade'];

    echo "<br>";

   echo "Informações do produto pesquisado: <br><br>";

    echo"<table border='2' cellpadding=10>";
    echo"<tr><th>ID</th>"
        ."<th>Nome</th>"
        ."<th>Preço</th>"
        ."<th>Quantidade</th>"
        ."<th>Validade</th>"
     ."</tr>"; 
    echo"<tr><td>$idProduto</td>"
        ."<td>$nome</td>"
        ."<td>$preco</td>"
        ."<td>$quantidade</td>"
        ."<td>$validade</td>"
     ."</tr>";

     }
    }
  } 

 echo "</table>";

?>
