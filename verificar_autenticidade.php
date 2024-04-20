<?php 
session_start();

if($_SESSION["autenticado"] != true){
    //destruir qualquer sessão existente
    session_destroy();

    header("Location: ../tela_login.php");
    exit;
}
?>