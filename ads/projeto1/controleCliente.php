<!doctype html>
<html lang="pt-br">
<!--
Software demonstrativo criado por Hecton P.Domignos e Elena Lezhneva para o trabalho do
Curso de Anlálise e desenvolvimento de sistemas - Unopar. 2017.
-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Controle de Cliente - Flor de Liz</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" href="images/favicon.png">
  <?php include('menuHeader.html'); ?>


  </head>
<body>

<center><h3>Controle de Cliente</h3></center>

<div class="jumbotron">
  <div class="container">

    <div class="row">
    <form class="form-inline" action="funcoes.php" method="post" name="pesquisaForm"><!--Campo de pesquise Cliente -->
    <form action="funcoes.php" method="post">
    <div class="input-group">
    <label for="pesquisarCliente">Pesquisar</label><p>
    <input name="pesquisarCliente" type="text" class="form-control" placeholder="CNPJ ou CPF" aria-describedby="sizing-addon1">
    <button class="btn btn-info btn-sm" type="submit"> Pesquisar </button>
    </div><!--Fim do campo de pesquisa de cliente -->
  </div>

<br> <!--Adicione  Duas linhas abaixo -->


          <form id="controleCliente" action="funcoes.php" method="post">
              <div class="form-group row">                
                  <div class="row">
                  <div class="col-xs-6 col-sm-3">
                  <label for="nomeCliente">Nome Completo</label>
                  <input name="nomeCliente" type="text" class="form-control" value="<?php echo $nomeCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  <div class="col-xs-6 col-sm-3">
                  <label for="empresaCliente">Empresa</label>
                  <input name="empresaCliente" type="text" class="form-control" value="<?php echo $empresaCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  <div class="col-xs-6 col-sm-3">
                   <label for="enderecoCliente">Endereço completo</label>
                  <input name="enderecoCliente" type="text"  class="form-control" value="<?php echo $enderecoCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-xs-6 col-sm-3">
                  <label for="cnpjCliente">CNPJ</label>
                  <input name="cnpjCliente" type="text" class="form-control" value="<?php echo $cnpjCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  <div class="col-xs-6 col-sm-3">
                  <label for="cpfCliente">CPF</label>
                  <input name="cpfCliente" type="text" class="form-control" value="<?php echo $cpfCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  <div class="col-xs-6 col-sm-3">
                   <label for="telefoneCliente">Telefone</label>
                  <input name="telefoneCliente" type="text"  class="form-control" value="<?php echo $telefoneCliente; ?>" aria-describedby="sizing-addon1">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-xs- col-sm-3">
                <br>
                <button name="btCadastroCliente" class="btn btn-info btn-sm" type="submit">Cadastrar</button>
              </div>
            </div>
           </div> <!--fim div form-group row -->
         </form> <!--fim form controle cliente -- >

  </div> <!--fim da div container -->
</div> <!-- fim da div jumbotron -->



</body>

</html>
