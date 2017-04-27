<?php


//CONEXÃO MYSQL
include '../controlers/connect-mysql.php';



$sel_estado = "SELECT * FROM uf";
echo '<option value="">Selecione o estado</option>';

$qr_estado = mysql_query($sel_estado);



while ($row_estado = mysql_fetch_assoc($qr_estado)) {
        echo '<option value="' . $row_estado['cd_uf'] . '">' . $row_estado['ds_uf_sigla'] . '</option>' . "\n";
}
?>