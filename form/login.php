<?php 
    include './conexao.php';
    $query = "select login from usuarios; ";
    $resultado = mysqli_query($conexao,$query)  ; 
    $query2 ='select senha from usuarios;';
    $resultado2 =mysqli_query($conexao,$query2);

    if (isset($_POST) && !empty($_POST)){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
    }
    else{
        ?>
        <script>
            alert('Insira o Login e a Senha');
        </script>

        <?php
    }

    if ($resultado == $login){
        if($senha == $resultado2){
            ?>
                <script type="text/javascript">location.href = './formCadProdutos.php';</script>
            <?php

        }
        else{
            ?>
            <script>
                alert('Senha Incorreta');
            </script>
            <?php   
        }
    }
    else{
        ?>
        <script>
            alert('Login Incorreta');
        </script>
        <?php   
    }  
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/style.css">
    <title>Login</title>
</head>
<body id='bg'>
    <div  class="container-fluid">
        <div id='top-card'>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                <h2>Login</h2>
                <form action="new_usuario.php" method="post">
                
                    <div class="form-group">
                        <label class="d-flex">Usuario <p class="text-danger">*</p></label> 
                        <input type="text" name="login" class='form-control' placeholder="Usuario">

                    </div>

                    <div class="form-group">
                        <label class="d-flex">Senha <p class="text-danger">*</p> </label>
                        <input type="password" name="senha" class='form-control'placeholder="Senha" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success"><h5>Entrar</h5> </button>
                    </div>

                </form>    
            </div>
        </div>
    </div>

</body>

</html>