<?php
if(isset($_GET["id"]) && !empty($_GET["id"]) )
{
    include "conexao.php";
    $query = "delete from produtos where id = ".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        header("location: tabProdutos.php?sucesso=Excluido com sucesso");
        exit();
    }
    else
    {
        header("location: tabProdutos.php?erro=Ocorreu algum erro no banco");
        exit();
    }
}
else
{
    header("location: tabProdutos.php?erro=Selecione a categoria para excluir");
    exit();
}

?>