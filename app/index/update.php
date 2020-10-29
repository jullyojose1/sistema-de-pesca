<?php
    require_once("../conexao.php");

	$objDb = new db;

	$link = $objDb -> conecta_mysql();       

    if(isset($_SESSION)){ 
        session_start(); 
    }
    include('../login/verifica_login.php');

    if(isset($_POST['btn-editar'])){
        if(isset($_FILES['ftPescado'])){
            $extensao = strtolower(substr($_FILES['ftPescado']['name'],-4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "img/";
            $idPescado = $_POST['idPescado'];
            $nomePescado = $_POST['nomePescado'];
            $massaPescado = $_POST['massaPescado'];
            $tamPescado = $_POST['tamPescado'];            
    
            $sql = "UPDATE pescado SET nomePescado = '$nomePescado', massaPescado = '$tamPescado', tamPescado = '$tamPescado' WHERE codPescado = '$idPescado'";
    
            if($query = mysqli_query($link, $sql)){                
                move_uploaded_file($_FILES['ftPescado']['tmp_name'],$diretorio.$novo_nome);
                
                $sqlFoto = "UPDATE arqpescado SET codPescado = '$idPescado', arquivo = '$novo_nome',NOW()";                
    
                if($queryFoto = mysqli_query($link,$sqlFoto)){
                    $tipo = "success";
                    $msg = "Dados do peixe alterado com sucesso!";
                    header('Location: lista_pescado.php');
                } else {
                    $tipo = "danger";
                    $msg = "Falha ao atualizar os dados do peixe";
                    header('Location: lista_pescado.php');
                }
            }   
        }
    }
?>