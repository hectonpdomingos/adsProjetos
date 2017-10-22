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
  <title>Cadastro do Produto - Flor de Liz</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" href="images/favicon.png">
  <?php include('menuHeader.html'); ?>


  </head>
<body>
<center><h3>Controle do Produto</h3></center>

<div class="jumbotron">
  <div class="container">
    <form class="form-group" action="./api/funcoes.php" method="post"> <!-- formulário de cadastro de produto -->
      <div class="row">
            <div class="col-xs-6 col-sm-2">
                    <label for="modelo" >Modelo</label>
                    <input class="form-control" type="text" name="modelo">
            </div>

  <div class="col-xs-6 col-sm-2">
    <label><strong>Coleção</strong></label><br>
  <select class="form-control" id="colecao" name="colecao">
  <option value="outono">Outono</option>
  <option value="verao">Verão</option>
  <option value="primavera">Primavera</option>
  <option value="inverno">Verão</option>
</select>
  </div>


<div class="col-xs-6 col-sm-2">
  <label for="tmin">Tam - Mínimo</label>
      <input class="form-control" id="tmin"  name="tamMin"></input>
  <label  for="tmax">Tam - Máximo</label>
      <input class="form-control" id="tmax" name="tamMax"></input>
</div>


<div class="col-xs-6 col-md-2">
    <label for="corProduto">Cor</label>
      <select class="form-control" id="corProduto" name="cor">
          <option value="Branca">Branca</option>
          <option value="Preta">Preta</option>
          <option value="Azul">Azul</option>
          <option value="Rosa">Rosa</option>
      </select>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-2">
<label for="custo" >Custo</label><br>
<input class="form-control" id="custo" name="custo" type="any">
</div>
</div>

<br>
<div class="row">
<div class="col-xs-6 col-sm-2">
<button name="btCadProduto" class="btn btn-info btn-sm" type="submit">Cadastrar</button>
</div>
</div>


</form> <!-- fim do formulário de cadastro de produto -->

</div> <!--fim da div container -->

</div> <!-- fim da div jumbotron -->


</body>
</html>
