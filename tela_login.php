<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>tela login</title>
    <style>
        body, .container, .row {
            height: 100vh ;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-4">
                <form method="post" action="validar_login.php">
                    <div class="card">
                        <div class="card-header">
                            Tela login
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input required type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input required type="password" name="senha" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary"> Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>