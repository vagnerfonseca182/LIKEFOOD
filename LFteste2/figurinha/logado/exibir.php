<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "empresa";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id_empregado, nome, dataNasc, cpf, numeroCart, dinheiro, codSeg FROM empregado");

// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
 
<html>
    <head>
    <title>Exemplo</title>
    <style type="text/css">
<!--
.style1 {
color: #FF0000;

}
.style2{
    color:#0040FF;
}

</style>
</head>
<body>
    <form action="#">
    
     <td width="69"><span class="style1"><b>Exercício 1e2:</b></span></td>
     <p></p>
     <td width="69"><span class="style2"><b>-----Tabela Empregado------</b></span></td>
 </form>
  <form method="POST" action="tabelaEmpregado.php">
          
            Nome:
            <input type="text" name="T_nome">
             Data Nasc:
            <input type="text" name="T_dataNasc">

             CPF:
            <input type="text" name="T_cpf">

           <p> Número do Cartão:
            <input type="text" name="T_numeroCart">

             Código de Segurança:
            <input type="text" name="T_codSeg">

            <p></p>
            <b>Valor em R$:</b>
            <input type="text" name="T_dinheiro">
           

            <input type="submit" value="Inserir">
        </form>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {

?>           <form>

            <p><b>Nome:</b> <?=$linha['nome']?> / <b>Data Nasc:</b> <?=$linha['dataNasc']?> / <b>CPF:</b> <?=$linha['cpf']?> / <b>Numero Do Cartão:</b> <?=$linha['numeroCart']?> / <b>Código de Seg:</b> <b>R$:</b><?=$linha['codSeg']?> / <b>Valor em R$:</b> <?=$linha['dinheiro']?></p>
        </form>

<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));

    // fim do if 
    }

?>



<td width="69"><span class="style2"><b>-----------------------------------------------------------------------------</b></span></td> 
<p></p>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>
