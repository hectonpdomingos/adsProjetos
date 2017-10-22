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
  <title>Controle de Pedido- Flor de Liz</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" href="images/favicon.png">

<?php include('menuHeader.html'); ?>


  </head>
<body>

<center><h3>Controle de Pedidos</h3></center>



<div class="jumbotron">
  <div class="container">

<br> <!--Adicione  Duas linhas abaixo  -->
<br>

<!-- Campos com dados do Cliente receberPedidos.php -->
<form name="codexworld_frm" action="controlePedidoFinalizado.php" method="post">
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
    </div><!--fim  row -->
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
    </div><!--fim  row -->

    <p>
    <hr>



<div class="row">
    <div class="col-xs- col-sm-3">
    <label>Produto</label>
    </div>
    <div class="col-xs- col-sm-3">
    <label>Tamanho</label>
    </div>
    <div class="col-xs- col-sm-1">
    <label>Quant</label>
    </div>
    <div class="col-xs- col-sm-2">
    <label>Valor Unitário</label>
    </div>
</div>


        <div class="field_wrapper">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                <input type="text" class="form-control" name="field_name[1][]" value="" />
                </div>
                <div class="col-xs-6 col-sm-3">
                <input type="text" class="form-control" name="field_name[1][]" value="" />
                </div>
                <div class="col-xs-6 col-sm-1">
                <input type="text" class="form-control" name="field_name[1][]" value="" />
              </div>
              <div class="col-xs-6 col-sm-2">
              <input type="text" class="form-control" name="field_name[1][]" value="" />
                <a href="javascript:void(0);" class="add_button" title="Add field">Acicionar Pedido</a>
            </div>


          </div>

        <input class="btn" type="submit" name="submit" value="Enviar" />
    </form>



    </div> <!--fim div form-group row -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js\adcionarMaisPedido.js"></script>

</body>
</html>
