<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8"/>
</head>
<body--

<!-- INÍCIO DO INSERT =============================================================================================================================== -->
<?php
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');





// 1 - FAZER A CONEXÃO COM O BANCO DE DADOS
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


// 3 - INSERIR OS DADOS NA TABELA VIA MYSQL COM UMA CONDIÇÃO

//3.1 - se a variável nome estiver, vazia....
if(empty($nome)){
    //.... exiba um alerta e não execute o insert
    echo("<script type='text/javascript'> alert('Preencha o campo nome!'); location.href='../form-estados.php';</script>");
//3.2 - senão, se a variável estiver preenchida...
}else {
    //3.3 - execute o insert...
    $insert = "INSERT INTO `cadastro` (`nome`, `id_estado`,`estado`, `id_cidade`, `cidade`) VALUES ('$nome', '$idestado', '$nomeEstado', '$idCidade', '$cidade')";
    mysql_query($insert, $conexao);

    //3.4 - EMITIR UMA MENSAGEM DE CONFIRMAÇÃO DO CADASTRO
    ?>
    <script>
        var msg = "Cadastro efetuado com sucesso!\Você será redirecionado para página de impressão do seu boleto. Clique em OK para continuar.";
        alert(msg);
        //window.self.location.href='relatorio-insert.php';
    </script>

    <?php

    //4 - EXIBIR UM RELATÓRIO COM O QUE FOI CADASTRADO

    //Seleciona todos os registros pelo cpf gerado na variável (recebida pelo input do index)
    //$sql=mysql_query("SELECT * FROM cadastro");



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
    $id = $registro['id'];
    $nome = $registro['nome'];
    $cdEstado = $registro['id_estado'];
    $estado =$registro['estado'];
    $cdCidade = $registro['id_cidade'];
    $cidade = $registro['cidade'];

    //4.5 - Visualizando todos os registros recebidos
    echo "<br>";
    echo "id = " . $id . "<br>";
    echo "Nome completo: " . $nome . "<br>";
    echo "Cód. Estado: " . $cdEstado . "<br>";
    echo "Estado: " . $nomeEstado . "<br>";
    echo "Cód. Cidade: " . $cdCidade . "<br>";
    echo "Cidade: " . $cidade . "<br>";


    //Botão para voltar à página inicial
    ?><a href="../form-estados.php">Sair</a><?php
}
?>
<!--/body></html-->


