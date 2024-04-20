<?php
include('./conexao_mysqli.php');
if ($_POST) {
    
    //verificar se foi enviado aos campos obrigatórios
    if (empty($_POST['email']) || empty($_POST["senha"])) {
        echo "
    <script>
        alert('Por favor, preencha todos campos obrigatórios!');
        window.location='./tela_login.php'; 
    </script>
    ";
        exit;
    } else {
        //recuperar informações do formulario login
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $sql = "
        select pk_usuario, nome
        from usuarios
        where email like '$email'
        and senha like '$senha'
        ";

        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {

            //organizar dados no banco como objetos
            $row = mysqli_fetch_object($query);

            //criar sessão para variavel global
            session_start();

            //declara variavel informando se o usuario está autenticado
            $_SESSION['autenticado'] = true;
            $_SESSION['pk_usuario'] = true;
            $_SESSION['nome_usuario'] = $row->nome;
            $_SESSION['tempo_login'] = time();

            header('Location ./crud_mysqli');
            exit;
        } else {
            echo "
        <script>
            alert('E-mail e/ou senha inválidos');
            window.location './tela_login.php';
        </script> 
        ";
            exit;
        };
    }
} else {
    header('Location ./tela_login.php');
    exit;
}
