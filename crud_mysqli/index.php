<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Lista de Ordem de Serviço
                        <button class="btn btn-primary btn-sm float-end">
                            <i class="bi bi-plus"></i> Novo
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover align-middle ">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Serviços</th>
                                    <th>R$ Valor</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Eugenio Silva</td>
                                    <td>
                                        Manutenção de micro<br>
                                        Configuração de roteador
                                    </td>
                                    <td>R$ 500,00</td>
                                    <td>
                                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary bi bi-brush "></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary bi bi-trash"></button>
                                            </div>
                                            </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Guilherme Batemarque</td>
                                    <td>
                                        Instalação de Software
                                    </td>
                                    <td>R$ 100,00</td>
                                    <td>
                                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary bi bi-brush "></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary bi bi-trash"></button>
                                            </div>
                                            </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>