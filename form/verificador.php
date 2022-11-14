<?php 
if(!$_SESSION['usuario']){
    header('Location: login.php');
    exit();
}
?>