 <?php
 // 1 - FAZER A CONEXÃO COM O BANCO DE DADOS
include '../includes/conect.php';

 // 2 - RECEBER OS DADOS DOS INPUTS DIGITADOS NO FORMULÁRIO VIA MÉTODO POST
 include '../includes/recebe-dados-input.php';

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
    include '../includes/report-max-id.php';

     //Botão para voltar à página inicial
     ?><a href="../form-estados.php">Sair</a><?php
 }
 ?>



