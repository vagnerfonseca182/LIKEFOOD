<?php
    //Chamar o arquivo verificar para poder saber se realmente está logado 
    include 'verificar.php';
    $ultimoAcesso = date('Y/m/d H:i:s', time());
    $update = "UPDATE `usuarios` SET `ultimoAcesso` = '$ultimoAcesso' WHERE `id` = '$idUser'";
    if(!alterarDatas($update, $conexao)){
        echo "<script>alert('Erro ao passar Ultimo Acesso');</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
          <title>LikeFood-01</title>
        <style>

        #imgpos {
        position: absolute; 
        left: 1000px; /* posiciona para a esquerda */ 
        top: 25px; /* posiciona  para baixo */
        height:50%;
        width:5%;
        }
        #texto {
        position: absolute; 
        left: 950px; /* posiciona para a esquerda */ 
        top: 80px; /* posiciona  para baixo */
       }
       .texto1 {
        position: absolute; 
        left: 1050px; /* posiciona para a esquerda */ 
        top: 10px; /* posiciona  para baixo */
       }
        .textoNome {
        position: absolute; 
        left: 600px; /* posiciona para a esquerda */ 
        top: 10px; /* posiciona  para baixo */
       }
       .se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    
}
        


        </style>
        <!--Css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilo.css">
        <!--Js-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
         <link rel="stylesheet" href="estaticas/css/index.css">
    <title>LikeFood</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/logomini1.png">
    
    </head>
    <body class="back2">
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light " style="width:100%;height:120px; background-color:rgb(230,67,70); color:white;">
        <img1 href="index.php" src="img/logo.png"  alt="">
        <img href ="index.php" src="img/icon1.png" alt="" id="imgpos">
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="#"></a>
        <!--<a class="navbar-brand" href="index.php">Album <span class="sr-only">(current)</span></a>-->
        <a class="navbar-brand" href="#"></a>
        <!--<a class="navbar-brand" href="#">Comprar</a>-->
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="ganhar.php">Ganhar LikeMoneys</a>
        <a class="navbar-brand" href="#"></a>
        <!--<a class="navbar-brand" href="dinheiro.php">Adicionar  Dinheiro</a>-->
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="deslogar.php">Sair</a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#" id="texto"><b>Seu Likemoney</b></a>
        <div class="texto1">
  

</div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
    <!---->
    <?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "likefood";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT  dinheiro, nome   FROM usuarios WHERE id = '$idUser'");

     //   $update = "UPDATE `usuarios` SET `dinheiro` = (SELECT `dinheiro` where `id` = $idUser) + 5 WHERE `id` = $idUser";

      //  mysqli_query($conexao, $update);
        echo '<p>';
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

    // se o número de resultados for maior que zero, mostra os dados
    if($total = 1) {
        // inicia o loop que vai mostrar todos os dados
        do {

?>           <div class="texto1">
             

            <h3>Likes$:</b> <?=$linha['dinheiro']?></h3>
        </div>
        <div class="textoNome">
             

            <h3>Ola!</b> <?=$linha['nome']?></h3>
        </div>

<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));

    // fim do if 
    }

?>

    <div class="texto1">
    <?php 
   
    
     
?>
</div>

    <div class="wrapper fadeInDown">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="center">
                     <button type="button" class="btn btn-danger btn-lg btn-block"">Ganhar LikeMoneys</button><br/>  
                    <button type="button" class="btn btn-danger btn-lg btn-block"">Prato da casa</button><br/>  
                    <button type="button" class="btn btn-danger btn-lg btn-block"">Prato do mês</button><br/>
                    <button type="button" class="btn btn-danger btn-lg btn-block"">Criar prato</button><br/>
                    <button type="button" class="btn btn-danger btn-lg btn-block"">Eleger um prato</button>

                     <a class="navbar-brand" href="deslogar.php">Sair</a>
                </div>                        
            </div>
        </div>


    </body>
</html> 