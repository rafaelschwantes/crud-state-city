<?php

//Seleciona todos os registros pelo cpf gerado na variável (recebida pelo input do index)
$validarcpf=mysql_query("SELECT * FROM cadastro WHERE cpf='$cpf'");

//Cria um array com todos os registros encontrados
$registro = mysql_fetch_array($validarcpf);

//CONTANDO QUANTOS REGISTROS DESSA CONSULTA POR CPF
$contarregistro=mysql_num_rows($validarcpf);
?>


