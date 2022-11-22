<?php
    session_start();
    include "./verificador.php";
    $titulo = "Edição de Produtos";
    include "./conexao.php";
    include "./uCabecalho.php";

    $querySelect = "select ID, NOME from CATEGORIA; ";
    $resultadoSelect = mysqli_query($conexao, $querySelect);


    if (isset($_POST) && !empty($_POST)) {
        $id=$_POST["id"];
        $ingredientes = $_POST["ingredientes"];
        $valor = $_POST["valor"];
        $nome = $_POST["nome"];
        $categoria = $_POST["select"];

        if (isset($_POST["ativo"]) && $_POST["ativo"] == "on") {
            $ativo = 1;
        } else {
            $ativo = 0;
        }

        $query = "update produtos set ingredientes = '$ingredientes' , valor = '$valor' , nome = '$nome' , id_categoria = '$categoria' , ativo = '$ativo' where id =$id";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            header("Location: tabProdutos.php?sucesso=Editado com sucesso");
            exit();
        }else{
            if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
                $new_name = $_FILES["imagem"]["name"]; //Definindo um novo nome para o arquivo
                $dir = '../assets/img/'; //Diretório para pasta img
                $dir2 = './assets/img/'; //Diretório para BD
                move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name);
                $imagem = $dir2 . $new_name; // Criando caminho no bd
                move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
            } else {
                $imagem = "";
            }
            if (empty($descricao)){
                header("Location: editProd.php?erro=Campo nome vazio!");
            } else if (empty($valor)){
                header("Location: editProd.php?erro=Campo do valor vazio!");
            } else if (empty($ingredientes)){
                header("Location: editProd.php?erro=Campo descrição vazio!");
            } else if($categoria == 0) {
                header("Location: editProd.php?erro=Selecione a Categoria!");
            }
        }
    }
    if(isset($_GET["id"]) && !empty($_GET["id"]) )
    {
    $query="select id,valor,ativo,nome,id_categoria,ingredientes from produtos where id=".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    $dados = mysqli_fetch_array($resultado);

    $id = $dados["id"];
    $valor = $dados["valor"];
    $ativo = $dados["ativo"];
    $nome = $dados["nome"];
    $categoria = $dados["id_categoria"];
    $ingredientes = $dados["ingredientes"];
    }
    ?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 1%;">
        <a href="./tabProdutos.php" class="btn btn-primary">VOLTAR</a>
    </div>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb" id="bread" style="margin-top: -2%;">
            <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edição de Produtos</li>
        </ol>
    </nav>

    <div class="row">
        <div class="offset-4 col-md-6">
            <div class="card" style="width: 80%;" id="cartao">
                <div class="card-body">
                    <h5 class="card-title text-center">Edição de Produtos</h5>
                    <form action="./editProd.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>
                                <h6 class="card-subtitle mb-2 text-muted">ID</h6>
                            </label>
                            <input readonly type="text" name="id" class="form-control" value="<?php echo $id; ?>"/>
                        </div>
                        <div class="form-group">
                            <label>
                                <h6 class="card-subtitle mb-2 text-muted">Nome</h6>
                            </label>
                            <input type="text" name="nome" class="form-control" placeholder="Você digita o nome do produto aqui." minlength="2" maxlength="30" value="<?php echo $nome; ?>"/>
                        </div>

                        <div class="form-group" id="inserir">
                            <label>
                                <h6 class="card-subtitle mb-2 text-muted">Valor</h6>
                            </label>
                            <input type="number" name="valor" class="form-control" placeholder="R$10,00" min="0" max="100" step=".01" value="<?php echo $valor; ?>"/>
                        </div>

                        <div class="input-group" id="inserir">
                            <span class="input-group-text">Descrição</span>
                            <textarea class="form-control" aria-label="With textarea" name="descricao" placeholder="Uma breve descrição." minlength="6" maxlength="100"><?php echo $ingredientes; ?></textarea>
                        </div>

                        <div class="form-group text-center" id="inserir">
                            <select class="form-select" name="select">
                                <?php while ($linha = mysqli_fetch_array($resultadoSelect)){?>    
                                <option value="<?php echo $linha["ID"]?>"><?php echo $linha["NOME"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group text-center" id="inserir">
                            <label>
                                <h6 class="card-subtitle mb-2 text-muted">Carregar Imagem</h6>
                            </label>
                            <input type="file" name="imagem" id="upImg" accept="image/*" class="form-control form-control-sm" />
                        </div>

                        <div class="form-check text-center" id="inserir">
                            <strong>Ativo <?php
                                if($ativo == 1){?>
                                        <input type="checkbox" name="ativo" class="form-check" checked />
                                    <?php
                                }else{?>
                                        <input type="checkbox" name="ativo" class="form-check" />
                                    <?php
                                } ?>
                            </strong> 
                        </div>

                        <div class="form-group text-center" id="inserir">
                            <button type="submit" class="btn btn-success">
                                Salvar Alterações
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
<script src="../assets/sc"></script>

</html>