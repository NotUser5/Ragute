<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css" />
    <link rel="stylesheet" href="./uStyle.css">
</head>

<body>

    <nav id="header" class="navbar navbar-expand-lg d-flex justify-content-around">

        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="./index.php">
                <img src="../assets/ragute2.png" alt="Bootstrap" width="220" height="50">
            </a>


            <button id="dropdown" class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul id="menu" class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around text-center">
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="./home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="./formCadProdutos.php">Cadastro Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="./formCadCategorias.php">Cadastro Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="./formCadUsuarios.php">Cadastro Usuarios</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <div class="container-fluid">