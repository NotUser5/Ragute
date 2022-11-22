<?php
session_start();
include "./verificador.php";
$titulo = "Cadastro de Categorias";
include "./uCabecalho.php";

if (isset($_POST) && !empty($_POST)) {

    include "./conexao.php";
    $nome = $_POST["nome"];

    if (empty($nome)) {
        /* echo '<div class="alert alert-warning" style="margin-top: 1%;">
                Existem campos vazios!
                </div>'; */
        header("Location: formCadCategorias.php?erro=Insira o nome da categoria para cadastrar!");
    } else {
        $query = "insert into categoria (nome) values ('$nome'); ";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            header("Location: tabCategorias.php?sucesso=Cadastrado com sucesso");
            exit();
        }
    }
}
?>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 1%;">
    <a href="./tabCategorias.php" class="btn btn-primary">VOLTAR</a>
</div>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb" id="bread" style="margin-top: -2%;">
        <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Categorias</li>
    </ol>
</nav>

<div class="row">
    <div class="offset-4 col-md-6">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Categorias</h5>
                <form action="./formCadCategorias.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Nome</h6>
                        </label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome da Categoria." minlength="1" maxlength="10"/>
                    </div>

                    <div class="form-group text-center" id="inserir">
                        <button type="submit" class="btn btn-success">
                            Salvar
                        </button>
                    </div>

                    <?php
                    if (isset($_GET["erro"]) && !empty($_GET["erro"])) {
                    ?>
                        <div class="alert alert-warning" style="margin-top: 1%;">
                            <strong><?php echo $_GET['erro'] ?></strong>
                        </div>
                    <?php
                    }
                    ?>

                </form>
            </div>
        </div>
    </div>

</div>

</div>

</body>
<script src="../assets/bootstrap.bundle.min.js"></script>

</html>