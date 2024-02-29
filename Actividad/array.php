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
<!-- //4. Escribe una función llamada imprimir_array que reciba un array como parámetro de 
        //entrada y muestre su contenido en una tabla con dos columnas. La primera columna 
        //mostrará la posición del array y la segunda el valor que hay en esa posición -->

        <div class="container mt-5">
        <h1>Imprimir Array </h1>
        <?php
        function imprimir_array($arr) {
            echo '<table class="table">';
            echo '<thead><tr><th>Posición</th><th>Valor</th></tr></thead>';
            echo '<tbody>';
            foreach ($arr as $pos => $valor) {
                echo "<tr><td>$pos</td><td>$valor</td></tr>";
            }
            echo '</tbody>';
            echo '</table>';
        }

        $array = array("10", "15", "1", "3");
        imprimir_array($array);
        ?>
        </div>

</body>
</html>