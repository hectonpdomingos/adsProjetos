<!doctype html>
<html lang="PT-BR">
<!--
Software demonstrativo criado por Hecton P.Domignos e Elena Lezhneva para o trabalho do
Curso de Anlálise e desenvolvimento de sistemas - Unopar. 2017.
-->

  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Controle de Entrega - Flor de Liz</title>
  <link rel="stylesheet" href="css/bootstrap.css">
<!--  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->

  <link rel="icon" href="images/favicon.png">
  <?php include('menuHeader.html'); ?>

  </head>
<body>


<center><h3>Controle de Entrega</h3></center>

<div class="jumbotron">
  <div class="container">



              <?php

                   header('Content-Type: text/html; charset=utf-8');
                   include('./api/_paginate_config.php');    //include of db config file
                   include ('./api/_paginate.php'); //include of paginat page

                    $per_page = 20;         // number of results to show per page

                    //solving utf8 problem
                    mysql_query("SET NAMES 'utf8'");
                    mysql_query('SET character_set_connection=utf8');
                    mysql_query('SET character_set_client=utf8');
                    mysql_query('SET character_set_results=utf8');

                    $result = mysql_query("SELECT pedido_id, cliente, data_time, status FROM controle_pedido_tb");
                    $total_results = mysql_num_rows($result);
                    $total_pages = ceil($total_results / $per_page);//total pages we going to have

                    //-------------if page is setcheck------------------//
                    if (isset($_GET['page'])) {
                    $show_page = $_GET['page'];             //it will telles the current page
                    if ($show_page > 0 && $show_page <= $total_pages) {
                    $start = ($show_page - 1) * $per_page;
                    $end = $start + $per_page;
                    } else {
                    // error - show first set of results
                    $start = 0;
                    $end = $per_page;
                    }
                    } else {
                    // if page isn't set, show first set of results
                    $start = 0;
                    $end = $per_page;
                    }
                    // display pagination
                    $page = intval($_GET['page']);

                    $tpages=$total_pages;
                    if ($page <= 0)
                    $page = 1;
                    ?>



                      <div class="row">
                        <?php
                                          // display data in table
                                          echo "<table class='table table-bordered table-responsive'>";
                                          echo "<thead><tr><th class='last'>Pedido ID</th><th>Cliente</th> <th>Data do Pedido</th><th>Status</th><th>Ação</th></tr></thead>";
                                          // loop through results of database query, displaying them in the table
                                          for ($i = $start; $i < $end; $i++) {
                                              // make sure that PHP doesn't try to show results that don't exist
                                              if ($i == $total_results) {
                                                  break;
                                              }


                                            if (mysql_result($result, $i, 'status')  == 2){


                                              // echo out the contents of each row into a table
                                              echo "<tr class='danger'' " . $cls . ">";
                                              echo '<td class="last">' . mysql_result($result, $i, 'pedido_id') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'cliente') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'data_time') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'status') . '</td>';
                                              echo '<td>

                                              <form action="/api/funcoes.php" method="post">
                                              <button class="btn btn-warning btn-sm actions"  type="submit"  name="btEntregaFalhou" value="'. mysql_result($result, $i, 'pedido_id') .'" >Falhou</button>
                                               </form>
                                              <form action="/api/funcoes.php" method="post">
                                              <button class="btn btn-primary btn-sm actions"  type="submit"  name="btEntregaConcluida" value="'. mysql_result($result, $i, 'pedido_id') .'" >Concluida</button>
                                              </form>

                                      '
                                                  ;
                                              echo "</tr>";

                                            }else
                                            {
                                                // echo out the contents of each row into a table
                                              echo "<tr " . $cls . ">";
                                              echo '<td class="last">' . mysql_result($result, $i, 'pedido_id') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'cliente') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'data_time') . '</td>';
                                              echo '<td>' . mysql_result($result, $i, 'status') . '</td>';
                                              echo '<td>

                                      <form action="/api/funcoes.php" method="post">
                                      <button class="btn btn-warning btn-sm actions"  type="submit"  name="btEntregaFalhou" value="'. mysql_result($result, $i, 'email') .'" >Falhou</button>
                                       </form>
                                      <form action="/api/funcoes.php" method="post">
                                      <button class="btn btn-primary btn-sm actions"  type="submit"  name="btEntregaConcluida" value="'. mysql_result($result, $i, 'email') .'" >Concluida</button>
                                      </form>


                                      '
                                                  ;
                                              echo "</tr>";
                                      }


                                          }
                                          // close table>
                                      echo "</table>";
                                           $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                                          echo '<div class="pager"><ul>';
                                          if ($total_pages > 1) {
                                              echo paginate($reload, $show_page, $total_pages);
                                          }
                                          echo "</ul></div>";
                                      // pagination
                                      ?>
          </div>





  </div> <!--fim da div container -->
</div> <!-- fim da div jumbotron -->



</body>
</html>
