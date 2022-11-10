<?php 
$titulo = "Cadastro de Produtos";
include "./uCabecalho.php"; 


include "./conexao.php";
if (isset($_POST) && !empty($_POST)){
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $ingredientes = $_POST["ingredientes"];
    $select = $_POST["select"];

    if(isset($_POST["ativo"]) && $_POST["ativo"] == "on"){
        $ativo = 1;
    } else {
        $ativo = 0;
    }

    if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
        $imagem = "./img/".$_FILES["imagem"]["name"];
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
    } else {
        $imagem = "";
    }
    
    $query = "insert into produtos (ID, DESCRICAO, VALOR, ATIVO, INGREDIENTES, IMG) VALUES (NULL,'$descricao', '$valor', '$ativo', '$ingredientes', '$imagem')";
    $resultado = mysqli_query($conexao, $query);

    if($resultado){
        header("Location: ./formCadProdutos.php");
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

<div class="row">
    <div class="offset-4 col-md-4">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Produtos</h5>
                <form action="./formCadProdutos.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" />
                    </div>

                    <div class="form-group" id="inserir">
                        <label>Valor</label>
                        <input type="number" name="valor" class="form-control" />
                    </div>

                    <div class="form-group" id="inserir">
                        <label>Ingredientes</label>
                        <input type="text" name="ingredientes" class="form-control" />
                    </div>

                    <div class="form-group text-center" id="inserir">
                        <select class="form-select" name="select">
                            <option selected>Selecione a Categoria</option>
                            <option value="1">Hamburger</option>
                            <option value="2">Frango</option>
                            <option value="3">Bebidas</option>
                        </select>
                        
                        <div class="form-group" id="inserir">
                            <label>Selecione a Imagem</label>
                            <input type="file" name="imagem" id="upImg" accept="image/*" class="form-control" />                       
                        </div>

                        <div class="form-check text-center" id="inserir">
                            Ativo <input type="checkbox" name="ativo">
                        </div>
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