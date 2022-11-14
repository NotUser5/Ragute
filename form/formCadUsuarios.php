<?php
$titulo = "Cadastro de Usuários";
include "./uCabecalho.php";

if(isset($_POST) && !empty($_POST)){

    include "./conexao.php";
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $query = "insert into usuarios (login, senha) values ('$login', MD5('$senha')); ";
    $resultado = mysqli_query($conexao, $query);

    if($resultado){
        header("Location: ./formCadCategorias.php");
        exit();
        ?>
            <div class="alert alert-success">
                Cadastrado com sucesso
            </div>
        <?php
    }

}

?>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 1%;">
    <a href="./home.php" class="btn btn-primary">VOLTAR</a>
</div>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb" id="bread" style="margin-top: -2%;">
        <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Usuários</li>
    </ol>
</nav>

<div class="row">
    <div class="offset-4 col-md-6">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Usuários</h5>
                <form action="./formCadUsuarios.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Login</h6>
                        </label>
                        <input type="text" name="login" class="form-control" placeholder="Digite seu login."/>
                    </div>

                    <div class="form-group" id="inserir">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Senha</h6>
                        </label>
                        <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha."/>
                    </div>
                    
                    <div class="form-group text-center" id="inserir" id="btnSalvar">
                        <button type="submit" class="btn btn-success">
                            Salvar Usuários
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

</div>

</body>
<script src="../assets/bootstrap.bundle.min.js"></script>

</html>