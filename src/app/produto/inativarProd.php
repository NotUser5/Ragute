<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    include "../conexao/conexao.php";
    $query = "update produtos set ativo= 0 where id = ".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado){
        header("location: tabProdutos.php?sucesso=Inativado com sucesso");
        exit();
    }
    else{
        header("location: tabProdutos.php?erro=Ocorreu algum erro no banco");
        exit();
    }
}
else{
    header("location: tabProdutos.php?erro=Selecione o produto para inativar");
    exit();
}
?>