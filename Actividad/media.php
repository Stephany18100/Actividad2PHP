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
<!-- //3.Escribe una función llamada calcular_media que reciba un array como parámetro de 
        //entrada y que devuelva la media de todos los valores que contiene. --> -->

        <div class="container mt-5">
        <h1>Calcular Medias</h1>
        <?php
        function calcular_media($arr) {
            $total = array_sum($arr);
            $media = $total / count($arr);
            echo '<div class="alert alert-success" role="alert">La media de los valores es: ' . $media . '</div>';
        }

        $valores = [10, 20, 30, 40, 50];
        calcular_media($valores);
        ?>
        </div>
</body>
</html>