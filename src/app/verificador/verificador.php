<?php 
if(!$_SESSION['usuario']){
    header('Location: ../login-out/login.php?erro=Faça o Login para acessar');
    exit();
}
?>