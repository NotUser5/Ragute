<?php 
    session_start();
    include('./conexao.php');

    if(empty($_POST['usuario']) ||  empty($_POST['senha'])){
        header('Location: ./login.php?erro="Algum campo não foi prenchido"');
        exit();
    }
    $usuario = mysqli_real_escape_string($conexao ,$_POST['usuario']) ;
    $senha = mysqli_real_escape_string($conexao ,$_POST['senha']);


    $query ="select * from usuarios where LOGIN = '$usuario' and SENHA = md5('$senha'); ";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    

    if($row==1){
        $_SESSION['usuario'] = $usuario;
        header('Location: home.php');
    }else{
        header('Location: login.php?erro="Usuario ou Senha incorretos verefique o que foi prenchido"');
    }
?>