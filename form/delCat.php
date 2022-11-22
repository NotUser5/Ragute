<?php
if(isset($_GET["id"]) && !empty($_GET["id"]) )
{
    include "conexao.php";
    $query = "delete from categoria where id = ".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        header("location: tabCategorias.php?sucesso=Excluido com sucesso");
        exit();
    }
    else
    {
        header("location: tabCategorias.php?erro=Ocorreu algum erro no banco");
        exit();
    }
}
else
{
    header("location: tabCategorias.php?erro=Selecione a categoria para excluir");
    exit();
}

?>