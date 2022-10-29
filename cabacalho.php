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
            <a id="logo" class="navbar-brand" href="./index.php"><img src="./assets/ragute2.png" alt="Bootstrap"
                    width="220" height="50"></a>

            <button id="dropdown" class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul id="menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="test" class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="test" class="nav-link active" aria-current="page" href="#">Lanches</a>
                    </li>
                    <li class="nav-item">
                        <a id="test" class="nav-link active" aria-current="page" href="#">Porções</a>
                    </li>
                    <li class="nav-item">
                        <a id="test" class="nav-link active" aria-current="page" href="#">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a id="test" class="nav-link active" aria-current="page" href="#">Sobre</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container-fluid">