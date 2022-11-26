<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="../../style/bootstrap.min.css" />
    <link rel="stylesheet" href="../../style/uStyle.css">
</head>

<!-- <div class="modal fade" id="confirmInativar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inativação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        Tem certeza que deseja inativar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" onClick="excluirOpcao()">Inativar</button>
      </div>
    </div>
  </div>
</div> -->
<!-- <div class="modal fade" id="confirmDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        Tem certeza que deseja excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" onClick="excluirOpcao()">Excluir</button>
      </div>
    </div>
  </div>
</div> -->

<body>

    <nav id="header" class="navbar navbar-expand-lg d-flex justify-content-around">

        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="../uhome/home.php">
                <img src="../../assets/img/ragute2.png" alt="Bootstrap" width="220" height="50">
            </a>


            <button id="dropdown" class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul id="menu" class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around text-center">
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../uhome/home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../produto/tabProdutos.php">Cadastro Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../categoria/tabCategorias.php">Cadastro Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active" aria-current="page" href="../usuario/tabUsuarios.php">Cadastro Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a id="UI" class="nav-link active text-danger" aria-current="page" href="../login-out/logout.php">Sair</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <div class="container">