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

        <?php
        // Incluye el archivo funciones.php
        include 'multiplicar.php';
        include 'multiplicar2.php';
        include 'media.php';
        include 'array.php';

        multiplicar(4);

        multiplicar2(3, 7);

        $numbers = [10, 20, 30, 40, 50];
        calcular_media($numbers);

        $array = array("10", "15", "1", "3");
        imprimir_array($array);

     
?>

</body>
</html>