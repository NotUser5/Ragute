<?php
$titulo = "Porções";
include "../cabecalho/cabecalho.php";

include "../conexao/conexao.php";
$querySelect = "select ID, NOME, VALOR, ATIVO, IMG, ID_CATEGORIA, INGREDIENTES from PRODUTOS ORDER BY 3; ";
$querySelect2 = "select ID, NOME, VALOR, ATIVO, IMG, ID_CATEGORIA, INGREDIENTES from PRODUTOS ORDER BY 3; ";
$resultadoSelect = mysqli_query($conexao, $querySelect);
$resultadoSelect2 = mysqli_query($conexao, $querySelect2);




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
            <li class="breadcrumb-item"><a id="crumb" href="../home/home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Porções</li>
        </ol>
    </nav>

    <h2 class="text-center">Porções</h2>
    <h3 class="p-3" id="quente">Porções Quentes</h3>

    <div class="row">
        <?php
        while ($linha = mysqli_fetch_array($resultadoSelect)) {
            $linha2 = $linha;
            if ($linha["ATIVO"] === '1' && $linha["ID_CATEGORIA"] === '5') {
        ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 ">
                                <img src="<?php echo $linha["IMG"] ?>" class="img-fluid rounded-start" alt="Porção Quente">
                            </div>
                            <div class="col-sm-11 col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $linha["NOME"]; ?></h5>
                                    <p class="card-text text-center"><?php echo $linha["INGREDIENTES"]; ?></p>
                                    <h6 class="card-title text-center">R$<?php echo $linha["VALOR"] ?></h6>
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

    <h3 class="p-3" id="frio">Porções Frias</h3>

    <div class="row">
        <?php

        while ($linha2 = mysqli_fetch_array($resultadoSelect2)) {
            if ($linha2["ATIVO"] === '1' && $linha2["ID_CATEGORIA"] === '6') {
        ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 ">
                                <img src="<?php echo $linha2["IMG"] ?>" class="img-fluid rounded-start" alt="Porção Fria">
                            </div>
                            <div class="col-sm-11 col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $linha2["NOME"]; ?></h5>
                                    <p class="card-text text-center"><?php echo $linha2["INGREDIENTES"]; ?></p>
                                    <h6 class="card-title text-center">R$<?php echo $linha2["VALOR"] ?></h6>
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



<?php include "../rodape/rodape.php"; ?>