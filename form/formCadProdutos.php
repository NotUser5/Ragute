<?php include "./uCabecalho.php"; ?>


<div class="row">
    <div class="offset-4 col-md-4">
        <div class="card" style="width: 80%;" id="cartao">
            <div class="card-body">
                <h5 class="card-title text-center">Cadastro de Produtos</h5>
                <form action="./formCadProdutos.php" method="post">
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" style="width: 100%;" />
                    </div>

                    <div class="form-group">
                        <label>Valor</label>
                        <input type="number" name="valor" class="form-control" style="width: 100%;" />
                    </div>

                    <div class="form-group">
                        <label>Ingredientes</label>
                        <input type="number" name="ingredientes" class="form-control" style="width: 100%;" />
                    </div>&nbsp

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Hamburguer</a></li>
                            <li><a class="dropdown-item" href="#">Frango</a></li>
                            <li><a class="dropdown-item" href="#">Batata</a></li>
                        </ul>
                    </div>
                    &nbsp

                    <div class="form-group">
                        Ativo <input type="checkbox" name="ativo" class="form-check">
                    </div>

                    <div class="form-group">
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

</html>