<?php 
/**
 * 
 */
echo "DAO - Select via class Sql ";
echo ">> SELECT * FROM tb_usuarios <br>";
require_once("config.php");

/*
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carrega esuário específico by ID
echo "Carrega esuário específico by ID";
$root = new Usuario();
$root->loadById(3);
echo $root;
echo "<br>";
/*
// Carrega Lista de Usuários - acessando getList via Método static (não precisa Instanciar)
echo "<hr>";
echo " Carrega Lista de Usuários - acessando getList via Método static <br>";	
$lista = Usuario::getList();
echo json_encode($lista);
echo "<hr>";
// Carrega Lista de Usuários - acessando loadByLogin via Método static (não precisa Instanciar)
echo "<hr>";
echo " Carrega Lista de Usuários - acessando loadByLogin via Método static <br>";	
$lista = Usuario::loadByLogin('M');
echo json_encode($lista);
echo "<hr>";
*/

//Carrega Lista de Usuários - acessando getLogin buscando login e Senha";
$usuario = new Usuario();
$usuario->getLogin("jose","esoj");
echo " Carrega Lista de Usuários - acessando getLogin buscando login e Senha <br>";	
echo '$usuario->getLogin("jose","esoj")'."<br>";

echo $usuario;




 ?>