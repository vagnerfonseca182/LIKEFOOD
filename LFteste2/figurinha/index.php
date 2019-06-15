<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LikeFood-01</title>
        <style>
        #imgpos1 {
  position: absolute; 
  left: 650px; /* posiciona para a esquerda */ 
  top: 100px; /* posiciona para baixo */
  }







         </style>
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">
        <!--Js-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
    <link rel="icon" type="image/png" sizes="16x16" href="logomini.png">
    </head>
    <body class="back">

    <!-- <img src="logo.png" width="90" height="160" alt="1"  id="imgpos1" />-->
     
         <div class="wrapper fadeInDown">
         <div id="formContent">
         <div class="gradual primeiro">
      <img src="user.jpg" />
    </div>
        <form action="logar.php" method="post">
         
         <div class="panel">
        <div class="panel-body">
            <form class="form-signin" method="POST" action="#">
                <fieldset>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" placeholder="Digite seu usuario.." name="login" type="text" id="login" required autofocus>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" placeholder="Digite sua senha.." name="senha" type="password" id="senha" required autofocus>
                    </div>
                    <a class="text-center text-danger" href="" style="float: right; font-size: 12px">Esqueceu sua senha?</a>
                    <br><br>
                    <button class="btn btn-primary btn-block mb-10" type="submit" name="entrar" style="background-color: #027CC1; border: solid 1px #027CC1"href="cadastro/"><i class="fa fa-check"></i> Entrar</button>
                   <p><p/>
                   <a href="cadastro/">
                   <button class="btn btn-primary btn-block mb-10" type="button"  name="Cadastrar" style="background-color: #027CC1; border: solid 1px #027CC1" ><i class="fa fa-check" ></i> Cadastrar</button> 
                    </a><br/>
                </fieldset>
            </form>        
        </div>
    </div>
          </div>
          </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
</html>