<?php
session_start();
include "../verificador/verificador.php";
$titulo = "Cadastro de Produtos";
include "../ucabecalho/uCabecalho.php";

include "../conexao/conexao.php";
$querySelect = "select ID, NOME from CATEGORIA; ";
$resultadoSelect = mysqli_query($conexao, $querySelect);


if (isset($_POST) && !empty($_POST)) {
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["select"];

    if (isset($_POST["ativo"]) && $_POST["ativo"] == "on") {
        $ativo = 1;
    } else {
        $ativo = 0;
    }

    if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
        $new_name = $_FILES["imagem"]["name"]; //Definindo um novo nome para o arquivo
        $dir = '../../assets/img/'; //Diretório para pasta img
        $dir2 = '../../assets/img/'; //Diretório para BD
        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name);
        $imagem = $dir2 . $new_name; // Criando caminho no bd
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
    } else {
        $imagem = "";
    }

    $query = "insert into produtos (ID, NOME, VALOR, ATIVO, INGREDIENTES, IMG, ID_CATEGORIA) VALUES (NULL,'$nome', '$valor', '$ativo', '$descricao', '$imagem', '$categoria')";
    $resultado = mysqli_query($conexao, $query);

    // if (empty($nome)){
    //     header("Location: formCadProdutos.php?erro=Campo nome vazio!");
    // } else if (empty($valor)){
    //     header("Location: formCadProdutos.php?erro=Campo do valor vazio!");
    // } else if (empty($descricao)){
    //     header("Location: formCadProdutos.php?erro=Campo descrição vazio!");
    // } else {
    //     $query = "insert into produtos (ID, DESCRICAO, VALOR, ATIVO, INGREDIENTES, IMG, ID_CATEGORIA) VALUES (NULL,'$nome', '$valor', '$ativo', '$descricao', '$imagem', '$categoria')";
    //     $resultado = mysqli_query($conexao, $query);

    //     if ($resultado) {
    //         header("Location: tabProdutos.php?sucesso=Cadastrado com sucesso");
    //         exit();
    //     }
    // }
  //  $_SESSION['nome'] = $nome;
    // if (isset($_GET["erro"]) && !empty($_GET["erro"])){
    //     $a = $_POST["nome"];
    //     $b = $_POST["valor"];
    //     $c = $_POST["descricao"];
    //     $d = $_POST["select"];
    // }
}
?>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 1%;">
    <a href="../uhome/home.php" class="btn btn-primary">VOLTAR</a>
</div>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb" id="bread" style="margin-top: -2%;">
        <li class="breadcrumb-item"><a id="crumb" href="../uhome/home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Produtos</li>
    </ol>
</nav>

<div class="row" id="bottomCard">
    <div class="offset-md-4 col-md-6">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Produtos</h5>
                <form action="./formCadProdutos.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Nome</h6>
                        </label>
                        <input type="text" name="nome" class="form-control" placeholder="Você digita o nome do produto aqui." minlength="2" maxlength="50" required/>
                    </div>

                    <div class="form-group" id="inserir">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Valor</h6>
                        </label>
                        <input type="number" name="valor" class="form-control" placeholder="R$" min="0" max="150" step=".01" required/>
                    </div>

                    <div class="input-group" id="inserir">
                        <span class="input-group-text">Descrição</span>
                        <textarea class="form-control" aria-label="With textarea" name="descricao" placeholder="Uma breve descrição." minlength="0" maxlength="255" required></textarea>
                    </div>

                    <div class="form-group text-center" id="inserir">
                        <select class="form-select" name="select" required> 
                            <option selected value="">Selecione a Categoria</option>
                            <?php
                            while ($linha = mysqli_fetch_array($resultadoSelect)) {
                                echo '<option value="' . $linha["ID"] . '">' . $linha["NOME"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                        
                    <div class="form-group text-center" id="inserir">
                        <label>
                            <h6 class="card-subtitle mb-2 text-muted">Carregar Imagem</h6>
                        </label>
                        <input type="file" name="imagem" id="upImg" accept="image/*" class="form-control form-control-sm" required />
                    </div>

                    <div class="form-check text-center" id="inserir">
                        <strong>Ativo</strong> <input type="checkbox" name="ativo">
                    </div>



                    <div class="form-group text-center" id="inserir">
                        <button type="submit" class="btn btn-success">
                            Salvar Produto
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
<script src="../../script/bootstrap.bundle.min.js"></script>
<script src="../../script/sc"></script>

</html>