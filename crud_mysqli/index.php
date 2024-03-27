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
                        <a href="form.php" class="btn btn-primary btn-sm float-end">
                            <i class="bi bi-plus"></i> Novo
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover align-middle ">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>CPF</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../conexao_mysqli.php');
                                $sql = "
                                SELECT pk_cliente, nome, cpf
                                FROM clientes
                                ORDER BY pk_cliente
                                ";

                                $query = mysqli_query($conn, $sql);

                                //verificar se encontrou registros no mysql
                                if (mysqli_num_rows($query) > 0) {
                                    // laço de repetição para listar item a item
                                    while ($row = mysqli_fetch_object($query)) {
                                        echo ' 
                                        <tr>
                                        <td class ="text-center">' . $row->pk_cliente . '</td>
                                        <td>' . $row->nome . '</td>
                                        <td class= "text-center">' . $row->cpf . '</td>
                                        <td class= "text-center">
                                            <div class=" text-center btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <a href="form.php?ref=' . base64_encode($row->pk_cliente) . '" class="btn btn-sm btn-outline-secondary bi bi-brush "></a>
                                                    <a href="remover.php?ref=' . base64_encode($row->pk_cliente) . '" class="btn btn-sm btn-outline-secondary bi bi-trash"></a>
                                                </div>
                                            </div>
                                        </td>
                                        </tr> ';
                                    }
                                }
                                ?>
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