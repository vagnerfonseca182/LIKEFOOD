<?php
 
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = filter_input(INPUT_POST, 'T_nome');
    $dataNasc = filter_input(INPUT_POST, 'T_dataNasc');
    $cpf = filter_input(INPUT_POST, 'T_cpf');
    $numeroCart = filter_input(INPUT_POST, 'T_numeroCart');
    $codSeg = filter_input(INPUT_POST, 'T_codSeg');
    $dinheiro = filter_input(INPUT_POST, 'T_dinheiro');
 
    /* validar os dados recebidos do formulario */
    if (empty($nome)){
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }    
}
else{
   echo " Erro, formulário não submetido ";
   exit();
}
 
 
/* estabelece a ligação à base de dados */
$ligacao = new mysqli("localhost", "root", "", "empresa");
 
/* verifica se ocorreu algum erro na ligação */
if ($ligacao->connect_errno) {
    echo "Falha na ligação: " . $ligacao->connect_error; 
    exit();
}
    
/* texto sql da consulta*/
$consulta = "INSERT INTO empregado ( nome, dataNasc, cpf, numeroCart, codSeg, dinheiro) VALUES ( '$nome','$dataNasc','$cpf','$numeroCart','$codSeg','$dinheiro' )";
 
/* executar a consulta e testar se ocorreu erro */
if (!$ligacao->query($consulta)) {
    echo " Falha ao executar a consulta: \"$consulta\" <br>" . $ligacao->error;
    $ligacao->close();  /* fechar a ligação */
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
   
   echo "<script>alert('Novo registo inserido com sucesso.');";
echo "location.href='index.php'</script>";

    }
 
$ligacao->close();       /* fechar a ligação */
?>