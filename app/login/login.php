<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">        

        <title>Cadastro</title>
    </head>
    <body class="text-center">        
        <form action="login_script.php" method="POST" class="form-signin">
            <!-- Logo / Título -->
            <img class="mb-4" src="../../img/pescaria-logo.png" alt="" width="72" height="72"> 
            <h1 class="h3 mb-3 font-weight-normal">Realize seu login</h1>

            <!-- Mensagem de Erro -->
            <?php
                if(isset($_SESSION['nao_autenticado'])):                
            ?>
                <div class="alert alert-danger" role="alert">
                    ERRO: Usuário ou senha incorretos!
                </div>
            <?php                
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            <!-- Formulário -->
            <label for="inputUser" class="sr-only">Usuário</label>
            <input type="text" class="form-control" placeholder="Nome de usuário" name="usuario" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" class="form-control" placeholder="Senha" name="senhaUser" required="">

           <!-- Área para cadastro -->
            <div class="checkbox mb-3">                
                <label>
                    <a href="../cadastro/cadastro.php">Cadastrar-se</a>
                </label>                
            </div>           
            
            <!-- Enviar formulário -->
            <button class="btn btn-lg btn-primary btn-block float-left" type="submit" value="entrar" name="entrar">Entrar</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>