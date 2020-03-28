<?php 
/**
 * 
 */
echo "DAO - Select via class Sql ";
//echo ">> SELECT * FROM tb_usuarios <br>";
require_once("config.php");
echo "<br>";
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
/*
// Carrega esuário específico by ID
echo "Carrega esuário específico by ID";
$root = new Usuario();
$root->loadById(3);
echo $root;
echo "<br>";
*/
/*
// Carrega Lista de Usuários - acessando getList via Método static (não precisa Instanciar)
echo "<hr>";
echo " Carrega Lista de Usuários - acessando getList via Método static <br>";	
$lista = Usuario::getList();
echo json_encode($lista);
echo "<hr>";
*/
/*
// Carrega Lista de Usuários - acessando loadByLogin via Método static (não precisa Instanciar)
echo "<hr>";
echo " Carrega Lista de Usuários - acessando loadByLogin via Método static <br>";	
$lista = Usuario::loadByLogin('o');
echo json_encode($lista);
echo "<hr>";
*/
/*
//Carrega Lista de Usuários - acessando getLogin buscando login e Senha";
$usuario = new Usuario();
$usuario->getLogin("jose","esoj");
echo " Carrega Lista de Usuários - acessando getLogin buscando login e Senha <br>";	
echo '$usuario->getLogin("jose","esoj")'."<br>";
echo $usuario;
echo "<hr>";
*/

echo " Inserindo Usuários - Function insertLogin - Usando CALL sp_usuarios_insert <br>";	
$aluno = new Usuario("Aluno","@lun0");
//$aluno->setDeslogin("Aluno");
//$aluno->setDessenha("@lun0");
$aluno->insertLogin();
echo " Usuários Inserido  <br>";
echo $aluno;

/*
echo " Alterando Usuários - Método updateUsuario - Usando Método query <br>";	
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->updateUsuario("professor","!@#$%");
echo " Usuários Alterado  <br>";
echo $usuario;
*/
/*
echo " Deletando Usuários - Método deleteUsuario - Usando Método query <br>";	
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->deleteUsuario();
echo " Usuários Deletado  <br>";
echo $usuario;
*/
 ?>