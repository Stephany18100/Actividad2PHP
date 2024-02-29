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
    
<div class="container mt-5">
        <h2>Contador de Vocales</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="frase">Ingrese una frase:</label>
                <input type="text" class="form-control" id="frase" name="frase" required>
            </div>
            <button type="submit" class="btn btn-primary">Contar Vocales</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST['frase'];

            $frase = strtolower($frase);  //Devuelve un string con todos los caracteres alfabéticos convertidos a minúsculas.
            $vocales = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);

            for ($i = 0; $i < strlen($frase); $i++) {
                $char = $frase[$i];
                if (array_key_exists($char, $vocales)) {
                  
                    $vocales[$char]++;
                }
            }

            echo "<h3>Resultado:</h3>";
            echo "<ul>";
            foreach ($vocales as $vocal => $contador) {
                echo "<li>'$vocal' = $contador </li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>