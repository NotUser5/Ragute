<?php
	session_start();
	include "./verificador.php";
	$titulo = "Tabela de Consulta de Produtos";
	include "./uCabecalho.php";
	include "./conexao.php";
	$query = "select id,NOME,VALOR,INGREDIENTES,ATIVO,IMG,ID_CATEGORIA from produtos";
	$resultado = mysqli_query($conexao, $query);

	if (isset($_POST) && !empty($_POST)) {

	    include "./conexao.php";
	    $nome = $_POST["nome"];

	    $query = "insert into categoria (nome) values ('$nome'); ";
	    $resultado = mysqli_query($conexao, $query);

	    if ($resultado) {
	        header("Location: ./tabProdutos.php");
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
		<div class="card-header bg-dark text-white"><h2>Tabela Produtos</h2></div>
		<div class="card-body">
			<div class="row">
				<div>
					<a href="./formCadProdutos.php" class="btn btn-success">Novo Produto</a>
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
				<th>Nome</th>
				<th>Valor</th>
				<th>Descrição</th>
				<th>Ativo</th>
				<th>Imagem</th>
				<th>Categoria</th>
				<th></th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php
			while ($linha = mysqli_fetch_array($resultado)) {
			?>
				<tr>
					<td><?php echo $linha["id"]; ?></td>
					<td><?php echo $linha["NOME"]; ?></td>
					<td>R$<?php echo $linha["VALOR"]; ?></td>
					<td><?php echo $linha["INGREDIENTES"]; ?></td>
					<td>
						<?php
						if ($linha["ATIVO"] == 1) {
						?>
							<input type="checkbox" checked disabled />
						<?php
						} else {
						?>
							<input type="checkbox" disabled />
						<?php
						}
						?>
					</td>
					<td><img src=".<?php echo $linha["IMG"]; ?>" width="150" height="30"></td>
					<td>
						<?php
							$queryCat="select id,NOME from categoria";
							$resultadoCat = mysqli_query($conexao, $queryCat);
							while($linhaCat = mysqli_fetch_array($resultadoCat)){
								if($linha["ID_CATEGORIA"]==$linhaCat["id"]) echo $linhaCat["NOME"];
							}
						?>
					</td>
					<td><a class="btn btn-warning" href="./editProd.php?id=<?php echo $linha["id"];?>">Editar</a></td>
					<td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDel">Excluir</a></td>
					<script type="text/javascript">
	                    function excluirOpcao(){
							location.href="./delProd.php?id=<?php echo $linha["id"];?>"
	                    }
	                </script>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>

<?php
 include "./uRodape.php"; 
 ?>