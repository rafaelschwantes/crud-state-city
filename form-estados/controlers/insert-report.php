<!-- INÍCIO DO INSERT =============================================================================================================================== -->
<?php

// 1 - RECEBER OS DADOS DOS INPUTS DIGITADOS NO FORMULÁRIO VIA MÉTODO POST
$nome=$_POST["nome"];
$estado=$_POST["estados"];
$cidade=$_POST["cidades"];

// 2 - FAZER A CONEXÃO COM O BANCO DE DADOS
$host="localhost";
$user="root";
$pass="";
$dbname="estado-cidade-cad-cons";

$conexao=  @mysql_connect($host, $user, $pass)  or die('erro na conexão');
$selectdb= mysql_select_db($dbname) or die('Erro na conexão');

// 3 - INSERIR OS DADOS NA TABELA VIA MYSQL COM UMA CONDIÇÃO

//3.1 - se a variável nome estiver, vazia....
if(empty($nome)){
    //.... exiba um alerta e não execute o insert
    echo("<script type='text/javascript'> alert('Preencha o campo nome!'); location.href='../form-estados.php';</script>");
//3.2 - senão, se a variável estiver preenchida...
}else {
    //3.3 - execute o insert...
    $insert = "INSERT INTO `cadastro` (`nome`, `estado`, `cidade`) VALUES ('$nome', '$estado', '$cidade')";
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
    $estado = $registro['estado'];
    $cidade = $registro['cidade'];

    //4.5 - Visualizando todos os registros recebidos
    echo "<br>";
    echo "id = " . $id . "<br>";
    echo "Nome completo: " . $nome . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Cidade: " . $cidade . "<br>";

    //Botão para voltar à página inicial
    ?><a href="../form-estados.php">Sair</a><?php
}
?>



