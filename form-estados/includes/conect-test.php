<?php
$query=mysql_query("SELECT * FROM cadastro");
echo "<h1>".mysql_num_rows($query)."</h1>";
?>