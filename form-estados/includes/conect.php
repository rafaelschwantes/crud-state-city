<?php

# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$host="localhost";
$user="root";
$pass="";
$dbname="estado-cidade-cad-cons";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');

# Aqui está o segredo
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>