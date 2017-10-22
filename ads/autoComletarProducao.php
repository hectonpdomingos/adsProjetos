<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '12domlei');
define('DB_NAME', 'flordeliz_db');

if (isset($_GET['term'])){
 $return_arr = array();
 try {
     $conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare('SELECT modelo FROM controle_produto_tb WHERE modelo LIKE :term');
     $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
     while($row = $stmt->fetch()) {
         $return_arr[] =  $row['modelo'];
     }
 } catch(PDOException $e) {
     echo 'ERROR: ' . $e->getMessage();
 }

   echo json_encode($return_arr);
}
?>
