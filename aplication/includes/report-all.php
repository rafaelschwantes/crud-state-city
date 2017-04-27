<?php

//Pesquisando no banco todos os registros cadastrados

//Seleciona todos os registros pelo cpf gerado na variável (recebida pelo input do index)
$sql=mysql_query("SELECT * FROM cadastro");

//Cria um array com todos os registros encontrados
$registro = mysql_fetch_array($sql);

//CONTANDO QUANTOS REGISTROS DESSA CONSULTA POR CPF
$contarregistro=mysql_num_rows($sql);

//Recebendo todos os registros encontrados na tabela
include "recebe-dados-tabela.php";

//Exibindo todos os dados recebidos pelo query
include "exibe-dados-tabela.php";

?>


