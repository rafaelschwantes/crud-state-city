<?php
$host="localhost";
$user="root";
$pass="";
$dbname="estado-cidade-cad-cons";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');

?>