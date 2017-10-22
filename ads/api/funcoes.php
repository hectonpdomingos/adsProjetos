<?php
setlocale(LC_MONETARY, 'en_US');

//Dados do formulário de cadastro de produtos
$modelo = $_POST['modelo'];
$colecao = $_POST['colecao'];
$cor = $_POST['cor'];
$tmin = $_POST['tamMin'];
$tmax = $_POST['tamMax'];
$custo = str_replace(',', '.',$_POST['custo']);  //money_format('%i', $_POST['custo']);   //




//Dados do Formulário de Controle de Produção
$nomeProduto = $_POST['nomeProduto'];
$loteProducao = $_POST['loteProducao'];
$dataProducao  = $_POST['dataProducao'];
$tamanhoProducao = $_POST['tamanhoProducao'];

//Dados do Formulário de Controle de Cliente
$controleNomeCliente= $_POST['nomeCliente'];
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
  controleProducao($nomeProduto, $loteProducao, $dataProducao, $tamanhoProducao);
}

//se receber dados do campo nomeCliente, acione a função controleCliente

if($controleNomeCliente){
  controleCliente($controleNomeCliente, $empresaCliente, $enderecoCliente, $cnpjCliente, $cpfCliente, $telefoneCliente);
}

//funcao Controle Cliente

function controleCliente($controleNomeCliente, $empresaCliente, $enderecoCliente, $cnpjCliente, $cpfCliente, $telefoneCliente){

  try {

  require('db.php');

  $servername;
  $username;
  $password;
  $dbname;
  $dbh;
      // set the PDO error mode to exception
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO controle_cliente_tb (nome, empresa, endereco, cnpj, cpf, telefone)
     VALUES (:nome ,:empresa ,:endereco ,:cnpj ,:cpf ,:telefone)";

      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':nome', $controleNomeCliente);
      $stmt->bindParam(':empresa', $empresaCliente);
      $stmt->bindParam(':endereco', $enderecoCliente);
      $stmt->bindParam(':cnpj', $cnpjCliente);
      $stmt->bindParam(':cpf', $cpfCliente);
      $stmt->bindParam(':telefone', $telefoneCliente);

      $stmt->execute();

  echo "Cliente adcionado!";

      }
  catch(PDOException $e)
      {
        echo $e->getMessage();

      }
  $dbh = null;


}


//Função Controle de Produção

function controleProducao($nomeProduto, $loteProducao, $dataProducao, $tamanhoProducao){

  try {

  require('db.php');

  $servername;
  $username;
  $password;
  $dbname;
  $dbh;
      // set the PDO error mode to exception
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO controle_producao_tb (produto, lote, data_time, tamanho)
     VALUES (:produto ,:lote ,:data_time ,:tamanho)";

      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':produto', $nomeProduto);
      $stmt->bindParam(':lote', $loteProducao);
      $stmt->bindParam(':data_time', $dataProducao);
      $stmt->bindParam(':tamanho', $tamanhoProducao);


      $stmt->execute();

  echo "Produto adcionado a produção!";

      }
  catch(PDOException $e)
      {
        echo $e->getMessage();

      }
  $dbh = null;

}



//Função cadastro de produtos

function cadProduto($modelo, $colecao, $cor, $tmin, $tmax, $custo){


  try {

  require('db.php');

  $servername;
  $username;
  $password;
  $dbname;
  $dbh;
      // set the PDO error mode to exception
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO controle_produto_tb (modelo, colecao, cor, tamanho_min, tamanho_max, custo)
     VALUES (:modelo ,:colecao ,:cor ,:tamanho_min ,:tamanho_max ,:custo)";

      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':modelo', $modelo);
      $stmt->bindParam(':colecao', $colecao);
      $stmt->bindParam(':cor', $cor);
      $stmt->bindParam(':tamanho_min', $tmin);
      $stmt->bindParam(':tamanho_max', $tmax);
      $stmt->bindParam(':custo', $custo);

      $stmt->execute();

  echo "Produto adcionado!";

      }
  catch(PDOException $e)
      {
        echo $e->getMessage();

      }
  $dbh = null;


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
