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
    
     <!-- //2.Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima 
        //las tablas de multiplicar entre esos dos números. Utilice la función del ejercicio anterior. -->

<div class="container mt-5">
        <h1>Tablas de Multiplicar 2 </h1>
        <?php
        function multiplicar2($inicio, $fin) {
            echo '<table class="table table-bordered">';
            for ($i = 1; $i <= 9; $i++) {
                $resultado = $i * $fin;
                echo "<tr><td>{$i} * {$fin} = {$resultado}</td></tr>";
            }
            echo '</table>';
        }
        multiplicar2(3, 7);
        ?>
    </div>

</body>
</html>