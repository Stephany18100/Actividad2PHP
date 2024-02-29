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

<!-- 7. Escribe un script que mediante un formulario permita seleccionar el número de 
            monedas que se desean lanzar (de 1 a 20) y el tipo de moneda (Dólar 
            Estadounidense, Euro, Yen japonés, Libra esterlina, Franco suizo). El 
            comportamiento tiene que ser similar al de la web random.org -->

            <div class="container mt-5">
        <h1>Resultado del Lanzamiento</h1>
        <div class="container mt-5">
        <h1>Lanzamiento de Monedas</h1>
        <form action="moneda.php" method="post">
            <div class="form-group">
                <label for="cantidad">Selecciona la cantidad de monedas (1-20):</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="20" required>
            </div>
            <div class="form-group">
                <label for="moneda">Selecciona el tipo de moneda:</label>
                <select class="form-control" id="moneda" name="moneda">
                    <option value="USD">Dólar Estadounidense</option>
                    <option value="EUR">Euro</option>
                    <option value="JPY">Yen japonés</option>
                    <option value="GBP">Libra esterlina</option>
                    <option value="CHF">Franco suizo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ver Resultado</button>
        </form>
    </div>
    
</body>
</html>