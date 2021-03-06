<?php
    require_once("../conexao.php");

	$objDb = new db;

	$link = $objDb -> conecta_mysql();       

    if(isset($_SESSION)){ 
        session_start(); 
    }
    include('../login/verifica_login.php') ;
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

        <title>Index</title>
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
                                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <h1 class="h2">Painel</h1>                        
                    </div>                    

                    <h2>Pesquisar pescador</h2>
                    
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pesquisar" aria-describedby="basic-addon2" name="nome">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-outline-secondary" name="procurar" value="Procurar">                                
                            </div>
                        </div>
                    </form>                                      
                                    
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nome</th>                                    
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                                
                                    $procurar = filter_input(INPUT_POST, 'procurar', FILTER_SANITIZE_STRING);

                                    if($procurar){
                                        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                                        $result_pesquisa = "SELECT * FROM usuario WHERE nomeUser LIKE '%$nome%'";
                                        $resultado_pesquisa = mysqli_query($link,$result_pesquisa);                                                                        

                                        while($row_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){
                                            echo "<tr>";
                                                echo "<td>" . $row_pesquisa['nomeUser'] . "</td>";                                            
                                                echo "<td>" . $row_pesquisa['emailUser'] . "</td>";
                                                echo "<td><a href='#'>Editar</a></td>";
                                                echo "<td><a href='#'>Excluir</a></td>";                                            
                                            echo "</tr>";                                         
                                        }
                                    }
                                ?>                                                                                                                        
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>  
    </body>

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

<!-- <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="">Sair</a></h2> -->