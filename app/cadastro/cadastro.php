<?php
    require_once("../conexao.php");
    $objDb = new db;
    $link = $objDb -> conecta_mysql();    
?>

<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">            

        <title>Cadastro</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 class="text-center">Cadastro de pescador</h3>
                    <hr>
                    <form action="cadastro_script.php" method="POST" id="form" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="nomeUser">Nome completo:</label>
                            <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nomeUser" required>
                        </div> 
                        <div class="form-group">
                            <label for="usuario">Nome de usuário:</label>
                            <input type="text" class="form-control" placeholder="Digite seu nome de usuário" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="emailUser">E-mail</label>
                            <input type="text" class="form-control" placeholder="Digite seu e-mail" name="emailUser" required>
                        </div>
                        <div class="form-group">
                            <label for="senhaUser">Senha:</label>
                            <input type="text" class="form-control" placeholder="Digite sua senha" name="senhaUser" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option>Selecione...</option>
                                <?php                                        
                                    $sql = "SELECT `id`, `nome`, `uf` FROM `estados`";
                                    $result = mysqli_query($link, $sql) or die ("Query deu erro");
                                                                                
                                    while($estado = mysqli_fetch_array($result)){
                                        echo '<option value='.$estado['id'].'>'.$estado['nome'].'</option>';
                                    }
                                ?>                                               
                            </select>
                        </div>
                        <div class="form-group">                                                              
                            <label for="cidade" id="labelCidade" style="display:none">Cidade:</label>
                            <select class="form-control" id="cidade" name="cidade" style="display:none"></select>                                                                    
                        </div>                        
                        <div class="form-group">
                            <label for="rua">Rua:</label>
                            <input type="text" class="form-control" placeholder="Digite sua rua" name="rua" required>
                        </div>
                        <div class="form-group">
                            <label for="Bairro">Bairro:</label>
                            <input type="text" class="form-control" placeholder="Digite seu bairro" name="bairro" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="telCelular">Telefone celular:</label>
                            <input type="text" class="form-control" placeholder="Digite seu telefone celular" name="telCelular" maxlength="11" min="11" max="12">
                        </div>
                        <div class="form-group">
                            <label for="telFixo">Telefone fixo:</label>
                            <input type="text" class="form-control" placeholder="Digite seu telefone fixo" name="telFixo" maxlength="11" min="11" max="12">
                        </div> -->
                        <hr>                                                                         
                        <div class="form-group text-center">
                            <a href="../login/login.php">Já possui uma conta? Clique aqui.</a>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-right" value="Cadastrar">
                            <input type="reset" class="btn btn-danger float-left" value="Limpar">
                        </div>                      
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->        
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>      -->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>        
        <script src="js/cadastro.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>