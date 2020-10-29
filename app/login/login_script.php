<?php
    session_start();
    require_once("../conexao.php");

    $objDb = new db;

    $link = $objDb -> conecta_mysql();

    if(empty($_POST['usuario']) || empty($_POST['senhaUser'])){
        header('Location: ../login/login.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($link, $_POST['usuario']);
    $senhaUser = mysqli_real_escape_string($link, $_POST['senhaUser']);

    $query = "SELECT codUser, usuario FROM usuario WHERE usuario='{$usuario}' AND senhaUser= MD5('{$senhaUser}')";

    $result = mysqli_query($link,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index/index.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }
?>