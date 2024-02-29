<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<!-- Escribe un script que reciba un número de un formulario y compruebe si tiene 3 
    dígitos y devuelva si o no -->

    <div class="container mt-5">
    <h2>Verificación de número</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="numerosn">Ingrese un número:</label>
            <input type="text" class="form-control" id="numerosn" name="numerosn" required>
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerosn = $_POST['numerosn'];

        if (strlen($numerosn) === 3) {
            echo "El número $numerosn tiene 3 dígitos.";
        } else {
            echo "El número $numerosn no tiene 3 dígitos.";
        }
    }
    ?>
    </div>
    
</body>
</html>