<?php 
    session_start();
    include('./conexao.php');

    if(empty($_POST['usuario']) ||  empty($_POST['senha'])){
        header('Location: ./login.php');
        exit();
    }
    $usuario = mysqli_real_escape_string($conexao ,$_POST['usuario']) ;
    $senha = mysqli_real_escape_string($conexao ,$_POST['senha']);


    $query ="select * from usuarios where LOGIN = '$usuario' and SENHA = md5('$senha'); ";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    

    if($row==1){
        $_SESSION['usuario'] = $usuario;
        header('Location: formCadProdutos.php');
    }else{
        header('Location: login.php');
    }
?>