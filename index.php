<?php

require_once("config.php");



//Carrega um usuario
//$root = new Usuario();
//$root->loadByID(3);
//echo $root;

//Carrega uma lista de usuarios;
//$lista = Usuario::allUsers();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login;
//$busca = Usuario::searchUser("o");
//echo json_encode($busca);

//Carrega um usuario usando um login e a senha;
$usuario = new Usuario();
$usuario->login("user", "123456");
echo $usuario;

?>