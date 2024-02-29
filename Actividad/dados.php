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
    
 <!-- 8. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen 
    con un valor aleatorio enre 1 y 6. -->


    <div class="container mt-5">
        <h1>Lanzamiento de Dado</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor_dado = rand(1, 6);
            echo "<p>Resultado del lanzamiento: $valor_dado</p>";
            switch ($valor_dado) {
                case 1:
                    echo '<img src="img/dado1.png" alt="Dado" width="300" height="300">';
                    break;
                case 2:
                    echo '<img src="img/dado2.png" alt="Dado" width="300" height="300">"';
                    break;
                case 3:
                    echo '<img src="img/dado3.png" alt="Dado" width="300" height="300">';
                    break;
                case 4:
                    echo '<img src="img/dado4.png" alt="Dado" width="300" height="300">';
                    break;
                case 5:
                    echo '<img src="img/dado5.png" alt="Dado" width="300" height="300">';
                    break;
                case 6:
                    echo '<img src="img/dado6.png" alt="Dado"width="300" height="300">';
                    break;
                default:
                    echo '<p>Algo salió mal. Inténtalo de nuevo.</p>';
            }
        }
        ?>
        <form method="post">
            <button type="submit" class="btn btn-primary">Tirar Dado</button>
        </form>
    </div>

</body>
</html>