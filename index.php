<?php  

require_once("config.php");

//Carrega um usuario
//$jose=new Usuario();
//$jose->loadById(3);


//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios atraves do login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario=new Usuario();
$usuario->login("root","!#$%");
echo $usuario;

?>