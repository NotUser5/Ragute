<?php 
$titulo = "Lanches";
include "./cabacalho.php"; 
?>

<div class="container">
   


        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb" id="bread">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lanches</li>
            </ol>
        </nav>

        <h2 class="text-center">Lanches</h2>
        <h3 class="p-3">Hamburguer</h3>

            <div class="row">
                <?php
                for ($i = 0; $i < 9; $i++) {
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row ">
                                <div class="col-sm-12 col-md-6 ">
                                    <img src="./assets/lanche.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-sm-11 col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">X-Bacon</h5>
                                        <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                        <h6 class="card-title">R$15,00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>

        <!-- <h3 class="p-3">Artesanais</h2>

        <div class="row">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card mb-3 " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="./assets/lanche.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">X-Bacon</h5>
                                        <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                        <h6 class="card-title">R$15,00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
        <h3 class="p-3">Frango</h2>

        <div class="row">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card mb-3 " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="./assets/lanche.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">X-Bacon</h5>
                                        <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                        <h6 class="card-title">R$15,00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
        </div>
        <h3 class="p-3">Hot-Dogs</h2>

        <div class="row">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card mb-3 " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="./assets/lanche.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">X-Bacon</h5>
                                        <p class="card-text">IngredientesIngredientesIngredientesIngredientesIngredientesIngredientesIngredientes</p>
                                        <h6 class="card-title">R$15,00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                ?>
        </div> -->


</div>



<?php include "./rodape.php"; ?>