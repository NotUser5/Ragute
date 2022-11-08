<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <nav id="header" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="./homepage.php">
                <img src="./assets/ragute2.png" alt="Bootstrap" width="220" height="50">
            </a>
            <button id="dropdown" class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul id="menu" class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex justify-content-around">
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="UI" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Lanches</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Hambúrgueres</a></li>
                            <li><a class="dropdown-item" href="#">Artesanais</a></li>
                            <li><a class="dropdown-item" href="#">Frango</a></li>
                            <li><a class="dropdown-item" href="#">Hot-dogs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="UI" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Porções</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Quentes</a></li>
                            <li><a class="dropdown-item" href="#">Frias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="UI" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#">Bebidas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Alcoólicas</a></li>
                            <li><a class="dropdown-item" href="#">Não Alcoólicas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="#">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">