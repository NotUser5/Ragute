<?php $titulo = "Home"; include "../cabecalho/cabecalho.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-4 col-sm-12"><h4>Bem Vindo ao cardápio do Ragute</h4></div>
    </div>
<h1 id="categoria" > Promoções</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="../../assets/img/carouselIMG1.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="../../assets/img/carouselIMG2.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="../../assets/img/carouselIMG3.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1><a href="#" class="btn" id="categoria">Lanches</a></h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
            <div class="card" id="cardHomePage">
                <a href="../lanches/lanches.php#hamburger">
                    <img class="card-img-top" src="../../assets/img/hamburguer.jpg" alt="hamburger">
                </a>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="../lanches/lanches.php#hamburger" class="btn" id="catButton">
                        <p id="textoCategoria">Hambúrgueres</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="cardHomePage">
                <a href="../lanches/lanches.php#naturais">
                    <img class="card-img-top" src="../../assets/img/natural.jpg" alt="Natural">
                </a>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="../lanches/lanches.php#naturais" class="btn" id="catButton">
                        <p id="textoCategoria">Naturais</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="cardHomePage">
                <a href="../lanches/lanches.php#frango">
                    <img class="card-img-top" src="../../assets/img/frango.jpg" alt="Frango">
                </a>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="../lanches/lanches.php#frango" class="btn" id="catButton">
                        <p id="textoCategoria">Frango</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="cardHomePage">
                <a href="../lanches/lanches.php#hotdog">
                    <img class="card-img-top" src="../../assets/img/hotdog.jpg" alt="Hot-Dog">
                </a>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="../lanches/lanches.php#hotdog" class="btn" id="catButton">
                        <p id="textoCategoria">Hot-Dogs</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2">
        <div>
            <a href="#" class="btn" id="categoria">Porções</a>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                <div class="col">
                    <div class="card" id="cardHomePage">
                        <a href="../porcao/porcoes.php#quente">
                            <img class="card-img-top" src="../../assets/img/quente.jpg" alt="hamburger">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="../porcao/porcoes.php#quente" class="btn" id="catButton">
                                <p id="textoCategoria">Quentes</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" id="cardHomePage">
                        <a href="../porcao/porcoes.php#frio">
                            <img class="card-img-top" src="../../assets/img/fria.png" alt="hamburger">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="../porcao/porcoes.php#frio" class="btn" id="catButton">
                                <p id="textoCategoria">Frias</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="#" class="btn" id="categoria">Bebidas</a>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                <div class="col">
                    <div class="card" id="cardHomePage">
                        <a href="../bebidas/bebidas.php#nao">
                            <img class="card-img-top" src="../../assets/img/naoalcolica.jpg" alt="hamburger">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="../bebidas/bebidas.php#nao" class="btn" id="catButton">
                                <p id="textoCategoria">Não Alcoólicas</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" id="cardHomePage">
                        <a href="../bebidas/bebidas.php#alcool">
                            <img class="card-img-top" src="../../assets/img/alcolica.jpg" alt="hamburger">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="../bebidas/bebidas.php#alcool" class="btn" id="catButton">
                                <p id="textoCategoria">Alcoólicas</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../rodape/rodape.php"; ?>
