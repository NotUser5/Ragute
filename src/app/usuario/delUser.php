<?php
if(isset($_GET["id"]) && !empty($_GET["id"]) )
{
    include "../conexao/conexao.php";
    $query = "delete from usuarios where id = ".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        header("location: tabUsuarios.php?sucesso=Excluido com sucesso");
        exit();
    }
    else
    {
        header("location: tabUsuarios.php?erro=Ocorreu algum erro no banco");
        exit();
    }
}
else
{
    header("location: tabUsuarios.php?erro=Selecione a categoria para excluir");
    exit();
}

?>