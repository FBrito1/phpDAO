<?php

require_once("config.php");


$root = new Usuario();
$root->loadByID(3);
echo $root;

?>