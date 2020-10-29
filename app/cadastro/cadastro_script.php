<?php  
    require_once("../conexao.php");

	$objDb = new db;

	$link = $objDb -> conecta_mysql();
       
    $usuario = $_POST['usuario'];
    $nomeUser = $_POST['nomeUser'];
    $emailUser = $_POST['emailUser'];
    $senhaUser = MD5($_POST['senhaUser']);
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    // $telCelular = $_POST['telCelular'];
    // $telFixo = $_POST['telFixo'];    
    
    $query_select = ('SELECT * FROM usuario WHERE usuario="'.$usuario.'"');
    $select = mysqli_query($link,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = isset($array['usuario']);

    if($logarray == $usuario){
        echo "
        <script language='javascript' type='text/javascript'>
            alert('Esse login já existe');window.location.href='cadastro.php';
        </script>
        ";
    } else {
        $cadastro = "INSERT INTO `usuario`(`usuario`, `nomeUser`, `emailUser`, `senhaUser`) VALUES ('$usuario','$nomeUser','$emailUser','$senhaUser')";
        
        if(mysqli_query($link,$cadastro)){        

            $idUser = mysqli_insert_id($link);            
    
            $cadastroEnd = "INSERT INTO `userendereco`(`codUser`, `rua`, `bairro`, `estado`, `cidade`) VALUES ('$idUser','$rua','$bairro','$estado','$cidade')";
    
            if(mysqli_query($link,$cadastroEnd)){
                echo "
                    <div class='alert alert-success' role='alert'>
                        Usuário cadastrado com sucesso! <a href='../login/login.php'>Clique aqui para fazer seu login.</a>
                    </div>
                ";
            } else {
                echo "
                    <div class='alert alert-danger' role='alert'>
                        Usuário não foi cadastrado! <a href='cadastro.php'>Tente novamente preenchendo os dados corretamente.</a>
                    </div>
                ";
            }
        }
    }  
?>