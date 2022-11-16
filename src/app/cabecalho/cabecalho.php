<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <link rel="icon" type="image/ico" href="../../assets/img/logo-ico.ico"/>
    <link rel="stylesheet" href="../../style/bootstrap.min.css" />
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="../../fontawesome/css/brands.css" rel="stylesheet"> -->
    
</head>

<body>
<nav id="header" class="navbar navbar-expand-lg d-flex justify-content-around">

        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="../home/home.php">
                <img src="../../assets/img/ragute2.png" alt="Bootstrap" width="220" height="50">
            </a>


            <button id="dropdown" class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul id="menu" class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around" >
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../home/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../lanches/lanches.php">Lanches</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="#">Porções</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="#">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../sobre/sobre.php">Sobre</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <div class="container-fluid">