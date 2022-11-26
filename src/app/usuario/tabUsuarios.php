<?php
session_start();
include "../verificador/verificador.php";
$titulo = "Tabela de Consulta de Produtos";
include "../ucabecalho/uCabecalho.php";
include "../conexao/conexao.php";
$query = "select id,LOGIN,SENHA from usuarios";
$resultado = mysqli_query($conexao, $query);

if (isset($_POST) && !empty($_POST)) {

    include "../conexao/conexao.php";
    $nome = $_POST["nome"];

    $query = "insert into categoria (nome) values ('$nome'); ";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        header("Location: ./tabUsuarios.php");
        exit();
?>
        <div class="alert alert-success">
            Cadastrado com sucesso
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger">
            Erro!
        </div>
<?php
    }
}
?>


<div class="card mt-4 mb-4 col-2 text-center">
	<div class="card-header bg-dark text-white"><h2>Tabela Usuários</h2></div>
	<div class="card-body">
		<div class="row">
			<div>
				<a href="./formCadUsuarios.php" class="btn btn-success">Novo Usuário</a>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($_GET["erro"]) && !empty($_GET["erro"])) {
?>
    <div class="alert alert-danger">
        <?php echo $_GET['erro'] ?>
    </div>
<?php
}
?>

<?php
if (isset($_GET["sucesso"]) && !empty($_GET["sucesso"])) {
?>
    <div class="alert alert-success">
        <?php echo $_GET['sucesso'] ?>
    </div>
<?php
}
?>

<table class="table table-hover table-striped">
	<thead class="text-center">
		<tr>
			<th>ID</th>
			<th>Login</th>
			<th></th>
		</tr>
	</thead>
	<tbody class="text-center">
		<?php
		while ($linha = mysqli_fetch_array($resultado)) {
		?>
			<tr>
				<td><?php echo $linha["id"]; ?></td>
				<td><?php echo $linha["LOGIN"]; ?></td>
				<td><a class="btn btn-warning" href="./editUser.php?id=<?php echo $linha["id"];?>">Editar</a></td>
				<td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDel">Excluir</a></td>
                <script type="text/javascript">
                    function excluirOpcao(){
						location.href="./delUser.php?id=<?php echo $linha["id"];?>"
                    }
                </script>
            </tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php
 include "../urodape/uRodape.php"; 
 ?>