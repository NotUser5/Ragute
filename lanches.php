<?php 
$titulo = "Lanches";
include "./cabacalho.php"; 

include "./form/conexao.php";
$querySelect = "select ID, DESCRICAO, VALOR, ATIVO, IMG, ID_CATEGORIA from PRODUTOS ORDER BY 1; ";
$querySelect2 = "select ID, DESCRICAO, VALOR, ATIVO, IMG, ID_CATEGORIA from PRODUTOS ORDER BY 1; ";
$querySelect3 = "select ID, DESCRICAO, VALOR, ATIVO, IMG, ID_CATEGORIA from PRODUTOS ORDER BY 1; ";
$querySelect4 = "select ID, DESCRICAO, VALOR, ATIVO, IMG, ID_CATEGORIA from PRODUTOS ORDER BY 1; ";
$resultadoSelect = mysqli_query($conexao, $querySelect);
$resultadoSelect2 = mysqli_query($conexao, $querySelect2);
$resultadoSelect3 = mysqli_query($conexao, $querySelect3);
$resultadoSelect4 = mysqli_query($conexao, $querySelect4);




?>

<div class="container">
   
<?php
/* while ($linha = mysqli_fetch_array($resultadoSelect) ){
    echo '<pre>';
    print_r($linha);
    echo '</pre>';
} */
?>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb" id="bread">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lanches</li>
            </ol>
        </nav>
        
        <h2 class="text-center">Lanches</h2>
        <h3 class="p-3">Hamburguer</h3>
       
        <!-- <div class="row">
            <form action="./lanches.php" method="get">
                 <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Digite aqui para pesquisar..." aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <button class="btn" type="submit"><img src="./assets/search.png" style="width: 1.5rem;" alt="Pesquisar"></button>
                        </span>
                    </div>
                </div>
            </form>   
            
        </div> -->

        <div class="row">
        <?php
            while ($linha = mysqli_fetch_array($resultadoSelect) ) {
                $linha2 = $linha;
                if($linha["ATIVO"] === '1' && $linha["ID_CATEGORIA"] === '1'){
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 ">
                                        <img src="<?php echo $linha["IMG"]?>" class="img-fluid rounded-start" alt="Lanche de Hamburguer">
                                    </div>
                                    <div class="col-sm-11 col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $linha["DESCRICAO"]; ?></h5>
                                            <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                            <h6 class="card-title">R$<?php echo $linha["VALOR"]?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }

            ?>
        </div>

         <h3 class="p-3">Artesanais</h3>

        <div class="row">
            <?php   

                while ($linha2 = mysqli_fetch_array($resultadoSelect2) ) {
                    if($linha2["ATIVO"] === '1' && $linha2["ID_CATEGORIA"] === '2'){
                        ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 ">
                                            <img src="<?php echo $linha2["IMG"]?>" class="img-fluid rounded-start" alt="Lanche de Hamburguer">
                                        </div>
                                        <div class="col-sm-11 col-md-5">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $linha2["DESCRICAO"]; ?></h5>
                                                <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                                <h6 class="card-title">R$<?php echo $linha2["VALOR"]?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }

            ?>
        </div>
        <h3 class="p-3">Frango</h3>

        <div class="row">
            <?php
                while ($linha3 = mysqli_fetch_array($resultadoSelect3) ) {
                    if($linha3["ATIVO"] === '1' && $linha3["ID_CATEGORIA"] === '3'){
                        ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 ">
                                            <img src="<?php echo $linha3["IMG"]?>" class="img-fluid rounded-start" alt="Lanche de Hamburguer">
                                        </div>
                                        <div class="col-sm-11 col-md-5">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $linha3["DESCRICAO"]; ?></h5>
                                                <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                                <h6 class="card-title">R$<?php echo $linha3["VALOR"]?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }

            ?>
        </div>
        <h3 class="p-3">Hot-Dogs</h3>

        <div class="row">
            <?php
                while ($linha4 = mysqli_fetch_array($resultadoSelect4) ) {
                    if($linha4["ATIVO"] === '1' && $linha4["ID_CATEGORIA"] === '4'){
                        ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 ">
                                            <img src="<?php echo $linha4["IMG"]?>" class="img-fluid rounded-start" alt="Lanche de Hamburguer">
                                        </div>
                                        <div class="col-sm-11 col-md-5">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $linha4["DESCRICAO"]; ?></h5>
                                                <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                                <h6 class="card-title">R$<?php echo $linha4["VALOR"]?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }

            ?>
        </div> 


</div>



<?php include "./rodape.php"; ?>