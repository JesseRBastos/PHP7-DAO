<?php 
/**
 * 
 */
echo "DAO - Select via class Sql ";

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo "<pre>";
//print_r($usuarios);
echo ">> SELECT * FROM tb_usuarios <br>";
echo json_encode($usuarios);

 ?>