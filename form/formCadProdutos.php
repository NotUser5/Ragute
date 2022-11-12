<?php 
$titulo = "Cadastro de Produtos";
include "./uCabecalho.php"; 


include "./conexao.php";
$querySelect = "select ID, NOME from CATEGORIA; ";
$resultadoSelect = mysqli_query($conexao, $querySelect);

// while ($linha = mysqli_fetch_array($resultadoSelect) ) {   
//     echo "<pre>";
//     print_r($linha);
//     echo "</pre>";
// }

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
        $dir = './img/'; //Diretório para uploads
        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);
        $imagem = $dir.$new_name; // Criando caminho no bd
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
                            <?php
                                while ($linha = mysqli_fetch_array($resultadoSelect) ) {
                                    echo '<option value="'. $linha["ID"].'">'. $linha["NOME"]. '</option>';
                                }
                            ?>
                        </select>                       
                    </div>
                    
                    <div class="form-group text-center" id="inserir">
                        <label>Carregar Imagem</label>
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