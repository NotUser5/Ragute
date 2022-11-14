<?php 
session_start();
include "./verificador.php";

$titulo = "Cadastro de Produtos";
include "./uCabecalho.php"; 

include "./conexao.php";
$querySelect = "select ID, NOME from CATEGORIA; ";
$resultadoSelect = mysqli_query($conexao, $querySelect);


// $querySelect2 = "select ID, NOME from INGREDIENTES; ";
// $resultadoSelect2 = mysqli_query($conexao, $querySelect2);

//  while ($linha2 = mysqli_fetch_array($resultadoSelect2) ) {   
//      echo "<pre>";
//      print_r($linha2);
//      echo "</pre>";
//  }

if (isset($_POST) && !empty($_POST)){
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $ingredientes = $_POST["ingredientes"];
    $categoria = $_POST["select"];

    if(isset($_POST["ativo"]) && $_POST["ativo"] == "on"){
        $ativo = 1;
    } else {
        $ativo = 0;
    }

    if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
        $new_name = $_FILES["imagem"]["name"]; //Definindo um novo nome para o arquivo
        $dir = '../assets/img/'; //Diretório para pasta img
        $dir2 = './assets/img/'; //Diretório para BD
        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);
        $imagem = $dir2.$new_name; // Criando caminho no bd
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem); 
    } else {
        $imagem = "";
    }
    
    $query = "insert into produtos (ID, DESCRICAO, VALOR, ATIVO, INGREDIENTES, IMG, ID_CATEGORIA) VALUES (NULL,'$descricao', '$valor', '$ativo', '$ingredientes', '$imagem', '$categoria')";
    $resultado = mysqli_query($conexao, $query);

    if($resultado){
        header("Location: ./formCadProdutos.php");
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

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 1%;">
    <a href="./home.php" class="btn btn-primary">VOLTAR</a>
</div>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb" id="bread">
        <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Produtos</li>
    </ol>
</nav>
    
<div class="row">
    <div class="offset-4 col-md-4">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Produtos</h5>
                <form action="./formCadProdutos.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><h6 class="card-subtitle mb-2 text-muted">Nome</h6></label>
                        <input type="text" name="descricao" class="form-control" />
                    </div>

                    <div class="form-group" id="inserir">
                        <label><h6 class="card-subtitle mb-2 text-muted">Valor</h6></label>
                        <input type="number" name="valor" class="form-control" />
                    </div>

                    <div class="form-group text-center" id="inserir">
                        <select class="form-select" name="select">
                            <option selected>Selecione a Categoria</option>
                            <?php
                                while ($linha = mysqli_fetch_array($resultadoSelect) ) {
                                    echo '<option value="'. $linha["ID"].'">'. $linha["NOME"]. '</option>';
                                }
                            ?>
                        </select>                       
                    </div>

                    <div class="form-group text-center" id="inserir">
                        <label><h6 class="card-subtitle mb-2 text-muted">Carregar Imagem</h6></label>
                        <input type="file" name="imagem" id="upImg" accept="image/*" class="form-control form-control-sm"/>                       
                    </div>

                    <div class="form-check text-center" id="inserir">
                        Ativo <input type="checkbox" name="ativo">
                    </div>

                    <div class="form-group text-center" id="inserir" id="btnSalvar">
                        <button type="submit" class="btn btn-success">
                            Salvar Produto
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