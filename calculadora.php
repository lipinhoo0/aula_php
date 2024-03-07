<?php 
$numero1 = $_GET["numero1"] ?? 0;
$numero2 = $_GET["numero2"]?? 0;
$resultado = $numero1 + $numero2;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form>
                    <div class="mb-3">
                        <label for="numero1" class="form-label"> numero 1</label>
                        <input value="<?php echo $numero1?>" id="numero1" type="number" name="numero1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numero2" class="form-label"> numero 2</label>
                        <input value="<?php echo $numero2?>" id="numero2" type="number" name="numero2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="resultado" class="form-label"> Resultado </label>
                        <input value="<?php echo $resultado?>" id="resultado" type="number" name="resultado" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <button onclick="limparFORM()" class="btn btn-danger" type="reset">Limpar</button>
                        <button class="btn btn-primary" type="submit">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    function limparForm(){
            document.getElementById("numero1").value =""
            document.getElementById("numero1").focus()
            document.getElementById("numero2").value =""
            document.getElementById("resultado").value =""
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>