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
  <!--  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->

    <link rel="icon" href="images/favicon.png">
    <?php include('menuHeader.html'); ?>
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />


    </head>
  <body>

  <center><h3>Controle de Produção</h3></center>
<?php
$dataProducao = date("Y-m-d H:i:s");
 ?>
  <div class="jumbotron">
    <div class="container">


      <form id="controleProducao" action="./api/funcoes.php" method="post">
          <div class="form-group row">
            <div class="row">
              <div class="col-xs-6 col-sm-3">
              <label for="Modelo">Produto:</label>
              <input name='nomeProduto' class="auto ui-autocomplete-input form-control" autocomplete="off" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-2">
              <label for="loteProducao">Lote de Produção</label>
              <input name="loteProducao" type="text" class="form-control" value="<?php echo $loteProducao; ?>" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-2">
              <label for="dataProducao">Data</label>
              <input name="dataProducao" type="text" class="form-control" value="<?php echo $dataProducao; ?>" aria-describedby="sizing-addon1">
              </div>
              <div class="col-xs-6 col-sm-1">
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



  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript">
  $(function() {

  	//autocomplete
  	$(".auto").autocomplete({
  		source: "api/autoCompletarProducao.php",
  		minLength:1
  	});
  });
  </script>


  </body>
</html>
