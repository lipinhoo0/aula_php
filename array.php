<?php
$array = array();

$item = $_POST["item"]

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trabalhando com array</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Váriavel array
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input name="item[]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input name="item[]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input name="item[]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input name="item[]" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input name="item[]" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info"> Incluir</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Resultado
                    </div>
                    <div class="card-body">
                        <?php var_dump($array); ?>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info"> Incluir </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>