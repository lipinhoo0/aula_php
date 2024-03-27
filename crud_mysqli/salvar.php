<?php 
if ($_POST) {
    //pegar informações vindas do formulário
    $pk_cliente = trim($_POST['pk_cliente']);
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $whatsapp = trim($_POST['whatsapp']);
    $email = trim($_POST['email']);

    // VALIDAR DADOS OBRIGATÓRIOS
    if(empty($nome) || empty($cpf)|| strlen($cpf) != 14 || empty($email)){
        echo"
        <script>
            alert ('Falha na validação do formulário');
            widow.location= './';
        </script>
        ";
    }
    //Arquivo de conexão
    include('../conexao_mysqli.php');

    //Montar a sintaxe SQL que o PHP vai enviar ao mysql 
    $sql = "
    INSERT INTO clientes(nome, cpf, whatsapp, email) VALUES
    ('$nome','$cpf','$whatsapp','$email')
    ";

    //ENVIAR A SINTAXE SQL AO MYSQL
    $query = mysqli_query($conn,$sql);

    //VERIFICA SE CADASTROU CORRETAMENTE
    if($query){
        $msg = "Registro salvo com sucesso";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }

    echo "
    <script>
        alert('$msg');
        widow.location =' ./';
    </script>
    ";
    exit;

} else {
    //redireciona o usuario para a pagina principal
    //do diretorio
    header("Location : ./");
    exit;
}
?>