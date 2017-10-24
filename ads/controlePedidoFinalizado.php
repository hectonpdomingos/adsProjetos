<!doctype html>
<html lang="en">
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
<?php
$nomeCliente = $_POST['nomeCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$telefoneCliente = $_POST['telefoneCliente'];
?>
<center><h3>Finalizar Pedido</h3></center>

<div class="jumbotron">
  <div class="container">

   <center><h3><label>FLOR DE LIZ - LTDA</label></h3></center>
   <br>

   <div class="row">
   <div class="col-md-12">
       <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title"><strong>Pedido</strong> #232332 <strong>Cliente: </strong>
                <?php echo $nomeCliente; ?> <strong>Endereço: </strong> <?php echo $enderecoCliente;?>
                <strong>Telefone: </strong> <?php echo $telefoneCliente; ?></h3>

           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-condensed">
                       <thead>
                           <tr>
                               <td><strong>Produto</strong></td>
                               <td class="text-center"><strong>Tamanho</strong></td>
                               <td class="text-center"><strong>Quantidade</strong></td>
                               <td class="text-center"><strong>Valor Unitário</strong></td>
                               <td class="text-right"><strong>Valor Total</strong></td>
                           </tr>
                       </thead>
                       <tbody>

<?php
$numeroItem;
//soma de todas os valores
$soma;
//soma de todos so itens
$somaConjuntoItens;

$pedidoCompleto;

if($_POST){
    $field_values_array = array_filter($_POST['field_name']);
    if($field_values_array){
        foreach ($field_values_array as $value){
          //contator de itens
          $numeroItem = $numeroItem +1;
          //mudando o separador decimal para ponto
          $quantidade = str_replace(',', '.', $value[2]);
          $valor = str_replace(',', '.', $value[3]);

          //variavel com todos os itens para db
          $pedidoCompleto = $pedidoCompleto ."Item: ". $numeroItem . " Produto: " . $value[0] . " Tamanho: " . $value[1] . " Qtd: " . $value[2] . " Valor Unitário: " . $value[3] . "<br>";

          //soma dos valores dos conjuntos de itens
          $somaConjuntoItens =   $quantidade * $valor ;
          $soma = $soma + $somaConjuntoItens;

            echo "<tr>";
            echo "<td>$value[0]</td>";
            echo "<td class='text-center'>$value[1]</td>";
            echo "<td class='text-center'>$value[2]</td>";
            echo "<td class='text-center'>$value[3]</td>";
            echo "<td class='text-right'>$somaConjuntoItens</td>";
            echo "</tr>";


         //zera $somaConjuntoItens;
         $somaConjuntoItens = 0;
        }
    }
}

//Valor final com desconto
$desconto = ((10 /100) * $soma);
$valorFinal = $soma - $desconto;

?>
                           <tr>
                               <td class="thick-line"></td>
                               <td class="thick-line"></td>
                               <td class="thick-line"></td>
                               <td class="thick-line text-right"><strong>Total</strong></td>
                               <td class="thick-line text-right"><?php echo $soma; ?></td>
                           </tr>
                           <tr>

                               <td class="thick-line"></td>
                               <td class="no-line"></td>
                               <td class="no-line"></td>
                               <td class="no-line text-right"><strong>Desconto</strong></td>
                               <td class="no-line text-right">10% = <?php echo $desconto; ?></td>
                           </tr>
                           <tr>

                               <td class="thick-line"></td>
                               <td class="no-line"></td>
                               <td class="no-line"></td>
                               <td class="no-line text-right"><strong>Valor Final</strong></td>
                               <td class="no-line text-right"><?php echo $valorFinal; ?></td>
                           </tr>
                       </tbody>
                   </table>

                   <form name="finalizarPedido" action="./api/funcoes.php" method="post">
                    <input hidden="true "name="pedidoCliente" value='<?php echo "Cliente: " . $nomeCliente . " | " ." Ender: " .$enderecoCliente . " | " ." Tel:". $telefoneCliente; ?>'>
                    <input hidden="true "name="pedidoCompleto" value='<?php echo $pedidoCompleto; ?>'>
                    <input hidden="true "name="pedidoTotal" value='<?php echo $soma; ?>'>
                    <input hidden="true "name="pedidoDesconto" value='<?php echo $desconto; ?>'>
                    <input hidden="true "name="pedidoValorFinal" value='<?php echo $valorFinal; ?>'>
                    <button class="bt bt-default" type="submit" name="btSubmitPedido">Finalizar Pedido</button>
                   </form>

               </div>
           </div>
       </div>
   </div>
</div>
</div>

  </div> <!--fim da div container -->
</div> <!-- fim da div jumbotron -->



</body>
</html>
