<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Novo cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="salvar.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-people"></i>Cadastro de cliente
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-1">
                                    <label for="id_cliente" class="form-label"><i class="bi bi-123"></i> ID</label>
                                    <input readonly type="text" name="id_cliente" id="id_cliente" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="nome" class="form-label"><i class="bi bi-person-vcard"></i> Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="cpf" class="form-label" data-mask="000.000.000-00"><i class="bi bi-person-vcard-fill"></i> CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="whatsapp" class="form-label" data-mask="(00) 0 0000-0000"><i class="bi bi-whatsapp"></i> Whatsapp</label>
                                    <input type="text" name="whatsapp" id="whatsapp" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="button" class="btn btn-outline-danger"><i class="bi bi-eraser"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>