<?php
// 2 - RECEBER OS DADOS DOS INPUTS DIGITADOS NO FORMULÁRIO VIA MÉTODO POST
$nome=$_POST["nome"];
$idestado=$_POST["estados"];
$cidade=$_POST["cidades"];

// 1.1 - Configurando id_estado e id_cidade
$sqlNomeEstado = mysql_query("SELECT ds_uf_nome FROM uf WHERE cd_uf = '$idestado';") or die(mysql_error());
$num = mysql_num_rows($sqlNomeEstado);
while ($row = mysql_fetch_array($sqlNomeEstado)){
    $nomeEstado = $row['ds_uf_nome'];
}

$sqlIdCidade = mysql_query("SELECT cd_cidade FROM cidades WHERE ds_cidade_nome = '$cidade';") or die(mysql_error());
$num = mysql_num_rows($sqlIdCidade);
while ($rowCidade = mysql_fetch_array($sqlIdCidade)){
    $idCidade = $rowCidade['cd_cidade'];
}

?>