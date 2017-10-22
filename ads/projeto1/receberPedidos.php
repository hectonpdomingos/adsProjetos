<?php
$nomeCliente = $_POST['nomeCliente'];
$empresaCliente = $_POST['empresaCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$cnpfCliente = $_POST['cnpfCliente'];
$cpfCliente = $_POST['cpfCliente'];
$telefoneCliente = $_POST['telefoneCliente'];
 echo 'NOTA FISCAL___________FLOR DE LIS_______________';
 echo '<br>';
 echo '<br>';
 echo 'Nome do cliente: '.$nomeCliente .'   '. 'Empresa: '.$empresaCliente. '  ' . 'Endereço Completo: '. $enderecoCliente;
 echo '<br>';
 echo 'CNPJ: '.$cnpfCliente .'   '. 'CPF: '.$cpfCliente. '  ' . 'Telefone: '. $telefoneCliente;
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '____________________LISTA DE PEDIDOS_______________';
 echo '<br>';
 echo '<br>';


if($_POST){
    $field_values_array = array_filter($_POST['field_name']);
    if($field_values_array){
        foreach ($field_values_array as $value){
            $soma = $value[2] + 2;
            //  echo "Qantidade: ".$value[2] . " Valor: ".$soma'<br />';
            
           
        

            //echo $value[0], $soma. '<br />';
            echo 'Produto: '. $value[0] .' Tamanho: '. $value[1] .' Quantidade: '. $soma;
            echo '<br>';
            
            //your mysql goes here
            //$sql="INSERT INTO stock_port (name, ticker) VALUES ('$value[0]', '$value[1]')";          
        }
    }
}
?>