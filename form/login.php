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
                <form action="./validacaoLogin.php" method="POST">
                
                    <div class="form-group">
                        <label class="d-flex" data-toggle="tooltip" data-placement="top" title="Campo obrigatorio preencher">Usuario 
                            <p class="text-danger" data-toggle="tooltip" data-placement="top" title="Campo obrigatorio preencher">*</p></label> 
                        <input type="text" name="usuario" class='form-control' placeholder="Usuario" >

                    </div>

                    <div class="form-group">
                        <label class="d-flex" data-toggle="tooltip" data-placement="top" title="Campo obrigatorio preencher">Senha 
                            <p class="text-danger" data-toggle="tooltip" data-placement="top" title="Campo obrigatorio preencher">*</p> </label>
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
<?php
if(isset($_GET["erro"]) && !empty($_GET["erro"])){
    ?>
        <script>alert( <?php echo $_GET["erro"]; ?>) </script>
        
    <?php
    }
?>