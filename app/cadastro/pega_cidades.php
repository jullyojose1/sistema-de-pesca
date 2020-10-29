<?php

    require_once("../conexao.php");

    $objDb = new db;

    $link = $objDb -> conecta_mysql(); 

    $sql = ('SELECT * FROM cidades WHERE id_estado="'.$_POST['id'].'"');

    $result = mysqli_query($link, $sql) or die ("Query deu erro");

    while($cidade = mysqli_fetch_array($result)){
        echo '<option value='.$cidade['id'].'>'.$cidade['nome'].'</option>';
    }

?>