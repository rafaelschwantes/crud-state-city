<?php

//CONEXÃO MYSQL
include 'controlers/connect-mysql.php';


$el_continente = $_POST['estado'];


$sql_cidades = "SELECT * FROM cidades WHERE cd_uf = $el_continente";



echo '<option value="">Selecione a cidade</option>';
$cidades = mysql_query($sql_cidades);
while($row_cidades = mysql_fetch_assoc($cidades)){

	echo '<option value="'.$row_cidades['ds_cidade_nome'].'">'. utf8_encode($row_cidades['ds_cidade_nome']).'</option>';
}

?>