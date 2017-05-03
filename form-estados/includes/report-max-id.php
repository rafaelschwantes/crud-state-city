<?php

//4 - EXIBIR UM RELATÓRIO COM O QUE FOI CADASTRADO

//4.1 - selecionar o registro específico
//pega por ordem decrescente de seleção - funciona quando está autoincrement
$sql = mysql_query("SELECT * FROM cadastro ORDER BY ID DESC LIMIT 1");

//pegar o maior valor da chave primária da tabela
//$sql=mysql_query("SELECT * FROM cadastro WHERE id = (SELECT MAX(ID) FROM cadastro)");

//4.2 - Cria um array com todos os registros encontrados
$registro = mysql_fetch_array($sql);

//4.3 - Conta quantos registros foram encontrados
$contarregistro = mysql_num_rows($sql);

//4.4 - Recebendo todos os registros da tabela
include 'recebe-dados-tabela.php';

//4.5 - Visualizando todos os registros recebidos
include 'exibe-dados-tabela.php';

?>