<?php 
if(!$_SESSION['usuario']){
    header('Location: login.php?erro=Faça o Login para acessar');
    exit();
}
?>