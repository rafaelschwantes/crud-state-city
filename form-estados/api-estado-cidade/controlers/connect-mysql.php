<?php

/*APONTAR ESTAS LINHAS NO HEAD DO INDEX*/

//<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
//<script src="api-estado-cidade/function.js"></script>


/*dar os ids dos selects para estados e cidades*/
/*
$host="mysql01.jovemaprendizvivario.hospedagemdesites.ws";
$user="jovemaprendizv";
$pass="gustyle1980";
$dbname="jovemaprendizv";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');
*/

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