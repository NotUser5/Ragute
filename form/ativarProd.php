<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    include "conexao.php";
    $query = "update produtos set ativo=1 where id = ".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado){
        header("location: tabProdutos.php?sucesso=Ativado com sucesso");
        exit();
    }
    else{
        header("location: tabProdutos.php?erro=Ocorreu algum erro no banco");
        exit();
    }
}
else{
    header("location: tabProdutos.php?erro=Selecione o produto para ativar");
    exit();
}
?>