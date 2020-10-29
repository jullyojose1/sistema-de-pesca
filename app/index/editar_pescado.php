<?php
    require_once("../conexao.php");

	$objDb = new db;

	$link = $objDb -> conecta_mysql();       

    if(isset($_SESSION)){ 
        session_start(); 
    }
    include('../login/verifica_login.php');

    if(isset($_GET['codPescado'])){
        $id = mysqli_escape_string($link,$_GET['codPescado']);
        
        $sql = "SELECT * FROM pescado WHERE codPescado ='$id'";
        $resultado = mysqli_query($link,$sql);
        $dados = mysqli_fetch_array($resultado);
    }
   
?>

<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->        
        <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">        

        <title>Editar - Pescado</title>
    </head>                    
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Sistema de pesca</a>
            <h4 style="color: white;">Olá, <?php echo $_SESSION['usuario']; ?></h4>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="../login/logout.php">Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                Pescadores <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                Pescarias
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group dropright">
                                    <a class="nav-link" href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    Pescados <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>                                    
                                    <div class="dropdown-menu">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="cadastra_pescado.php">Cadastrar pescado</a></li>
                                            <li class="nav-item"><a href="lista_pescado.php">Ver pescados</a></li>
                                        </ul>                                        
                                    </div>
                                </div>                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Minha conta
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                Ranking
                                </a>
                            </li>                        
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Editar pescado</h1>                        
                    </div>                    
                    <form action="update.php" method="POST" enctype="multipart/form-data" name="formPescado">
                        <input type="hidden" name="idPescado" value="<?php echo $dados['codPescado'] ?>">
                        <div class="form-group">
                                <label for="nomePescado">Nome do peixe:</label>
                                <input type="text" class="form-control" id="nomePescado" name="nomePescado" placeholder="Nome do peixe" value="<?php echo $dados['nomePescado'] ?>" required>
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="massaPescado">Peso do peixe:</label>
                                <input type="text" class="form-control" id="massaPescado" name="massaPescado" value="<?php echo $dados['massaPescado'] ?>" placeholder="Peso do peixe" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tamPescado">Tamanho do peixe:</label>
                                <input type="text" class="form-control" id="tamPescado" name="tamPescado" value="<?php echo $dados['tamPescado'] ?>" placeholder="Tamanho do peixe" required>
                            </div>
                        </div>
                        <div class="form-group">                             
                            <div class="custom-file">                                                                                           
                                <input type="file" class="custom-file-input" id="ftPescado" name="ftPescado" required>
                                <label class="custom-file-label" for="ftPescado">Selecione uma foto...</label>                                 
                            </div>                        
                            <p id="ftSelecionada" style="display: none;">Imagem selecionada:</p>
                            <img src="" alt="" id="foto" width="250" style="display: none;">                                                                                       
                        </div>                                                                                           
                        <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar</button>
                        <a href="lista_pescado.php" class="btn btn-danger float-right">Lista de peixes</a>                        
                    </form>

                </main>
            </div>
        </div>  
    </body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('#ftPescado').change(function(){
                    const file = $(this)[0].files[0];
                    const fileReader = new FileReader();
                    fileReader.onloadend = function(){
                        $('#foto').attr('src',fileReader.result);
                        $('#ftSelecionada').css({'display':'block'});
                        $('#foto').css({'display':'block'});
                    }   
                    fileReader.readAsDataURL(file);
                })
            })
        </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>

<!-- <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="">Sair</a></h2> -->