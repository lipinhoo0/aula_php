<?php
$host = "localhost"; //caminho do banco ()
$user = "root"; //usuario
$pass = ""; //senha
$dbname = "ordem_servico"; //nome do banco

$conn = mysqli_connect($host, $user, $pass, $dbname);//

if ($conn){
    // echo "Banco de dados conectado com sucesso!";
} else {
    echo "Falha ao conectar ao Banco de dados.";
}
?>