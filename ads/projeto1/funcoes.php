<?php

//Dados do formulário de cadastro de produtos
$modelo = $_POST['modelo'];
$colecao = $_POST['colecao'];
$cor = $_POST['cor'];
$tmin = $_POST['tamMin'];
$tmax = $_POST['tamMax'];
$custo = $_POST['custo'];

//Dados do Formulário de Controle de Produção

$loteProducao = $_POST['loteProducao'];
$dataProducao  = $_POST['dataProducao'];
$tamanhoProducao = $_POST['tamanhoProducao'];

//Dados do Formulário de Controle de Cliente

$nomeCliente = $_POST['nomeCliente'];
$empresaCliente = $_POST['empresaCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$cnpjCliente = $_POST['cnpjCliente'];
$cpfCliente = $_POST['cpfCliente'];
$telefoneCliente = $_POST['telefoneCliente'];

//Pesquisa cliente - Formulário de pedido
$pesquisarCliente = $_POST['pesquisarCliente'];

//Dados do Formulário de Controle de Pedido
$pedidoProduto = $_POST['pedidoProduto'];
$pedidoTamanho = $_POST['pedidoTamanho'];
$pedidoQuantidade = $_POST['pedidoQuantidade'];

//se receber pedido, processe os dados
if($pedidoProduto){

  print_r($_POST["pedidoProduto"]);

  // foreach ($pedidoProduto as $value){
  //    echo "Item : ".$value."<br />";
  // }
//  processarPedido($pedidoProduto, $pedidoTamanho, $pedidoQuantidade);
}

//Processara pedidos
if($_POST){
    $field_values_array = array_filter($_POST['field_name']);
    if($field_values_array){
        foreach ($field_values_array as $value){
            $soma = $value[2] + 2;
            //  echo "Qantidade: ".$value[2] . " Valor: ".$soma'<br />';


            echo $value[0], $soma. '<br />';

            //your mysql goes here
            //$sql="INSERT INTO stock_port (name, ticker) VALUES ('$value[0]', '$value[1]')";
        }
    }
}



//se receber dados do campo Pesquisa Cliente do Formulário de pedido execute a função
if($pesquisarCliente){
  pesquisarCliente($pesquisarCliente);

}

//se receber dados do campo modelo, acione a função cadProduto
if($modelo){
  cadProduto($modelo, $colecao, $cor, $tmin, $tmax, $custo);
}

//Se receber dados do campo lote de produção, acione a funcao de criar controle
if($loteProducao){
  controleProducao($loteProducao, $dataProducao, $tamanhoProducao);
}

//se receber dados do campo nomeCliente, acione a função controleCliente

if($nomeCliente){
  controleCliente($nomeCliente, $empresaCliente, $enderecoCliente, $cnpjCliente, $cpfCliente, $telefoneCliente);
}

//funcao Controle Cliente

function controleCliente($nomeCliente, $empresaCliente, $enderecoCliente, $cnpjCliente, $cpfCliente, $telefoneCliente){
echo $nomeCliente;
echo $empresaCliente;
echo $enderecoCliente;
echo $cnpjCliente;
echo $cpfCliente;
echo $telefoneCliente;

}


//Função Controle de Produção

function controleProducao($loteProducao, $dataProducao, $tamanhoProducao){

  echo $loteProducao;
  echo $dataProducao;
  echo $tamanhoProducao;

}



//Função cadastro de produtos

function cadProduto($modelo, $colecao, $cor, $tmin, $tmax, $custo){

echo  $modelo;
echo  $colecao;
echo  $cor;
echo  $tmin;
echo  $tmax;
echo  $custo;

}

function pesquisarCliente($pesquisarCliente){
  echo $pesquisarCliente;

}

function processarPedido($pedidoProduto, $pedidoTamanho, $pedidoQuantidade){
  foreach($pedidoProduto as $produto){
    echo $produto;
    echo "<br>";
  }
}

?>
