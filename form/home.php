<?php
session_start();
include "./verificador.php";
$titulo = "Cadastro de Categorias";
include "./uCabecalho.php";

if (isset($_POST) && !empty($_POST)) {

    include "./conexao.php";
    $nome = $_POST["nome"];

    $query = "insert into categoria (nome) values ('$nome'); ";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        header("Location: ./home.php");
        exit();
?>
        <div class="alert alert-success">
            Cadastrado com sucesso
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger">
            Erro!
        </div>
<?php
    }
}
?>

<div class="offset-1 col-md-10">
    <div class="card mt-4 mb-4">
        <div class="card-header bg-dark text-white">Produtos</div>
        <div class="card-body">
            <div class="row">
                <div class="col-3 text-center">
                    <a href="./formCadProdutos.php" class="btn btn-success">Novo Produto</a>
                </div>
                <div class="col-2">
                    <select name="opcao" class="form-control">
                        <option selected="selected" value="0">Todos</option>
                        <option value="1">Por Nome</option>
                        <option value="2">Por Código</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="textoPesquisado" placeholder="Digite aqui para pesquisar." />
                </div>
                <div class="col-2">
                    <button class="btn btn-dark">Pesquisar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET["erro"]) && !empty($_GET["erro"])) {
?>
    <div class="alert alert-danger">
        <?php echo $_GET['erro'] ?>
    </div>
<?php
}
?>

<?php
if (isset($_GET["sucesso"]) && !empty($_GET["sucesso"])) {
?>
    <div class="alert alert-success">
        <?php echo $_GET['sucesso'] ?>
    </div>
<?php
}
?>

</div>

</body>
<script src="../assets/bootstrap.bundle.min.js"></script>

</html>