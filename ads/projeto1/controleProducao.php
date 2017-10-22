  <html lang="pt-br">
  <!--
  Software demonstrativo criado por Hecton P.Domignos e Elena Lezhneva para o trabalho do
  Curso de Anlálise e desenvolvimento de sistemas - Unopar. 2017.

  -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Produção - Flor de Liz</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/favicon.png">
    <?php include('menuHeader.html'); ?>


    </head>
  <body>

  <center><h3>Controle de Produção</h3></center>

  <div class="jumbotron">
    <div class="container">


      <form id="controleProducao" action="funcoes.php" method="post">
          <div class="form-group row">
            <div class="row">
              <div class="col-xs-6 col-sm-3">
              <label for="loteProducao">Lote de Produção</label>
              <input name="loteProducao" type="text" class="form-control" value="<?php echo $loteProducao; ?>" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-3">
              <label for="dataProducao">Data</label>
              <input name="dataProducao" type="text" class="form-control" value="<?php echo $dataProducao; ?>" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-3">
               <label for="tamanhoProducao">Tamanho</label>
              <input name="tamanhoProducao" type="text"  class="form-control" value="<?php echo $tamanhoProducao; ?>" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-3">
              <label for="btProduzir">Ação</label><br>
              <button name="btProduzir" class="btn btn-info btn-sm" type="submit">Produzir</button>
              </div>
             </div>
          </div> <!--fim div form-group row -->
        </form>

    </div> <!--fim da div container -->
  </div> <!-- fim da div jumbotron -->


  </body>
</html>
