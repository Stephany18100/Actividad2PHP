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
             //1. Escribe una función que reciba un número como parámetro de entrada y que imprima 
              //su tabla de multiplicar.
              
            //implementacion
            function multiplicar($argumento){
                echo "<table>
                <tr>
                    <td>1*$argumento = " .$resultado=1*$argumento."</td>
                </tr>
                <tr>
                <td>2*$argumento = " .$resultado=2*$argumento."</td>
                </tr>
                <tr>
                <td>3*$argumento = " .$resultado=3*$argumento."</td>
                </tr>
                <tr>
                <td>4*$argumento = " .$resultado=4*$argumento."</td>
                </tr>
                <tr>
                <td>5*$argumento = " .$resultado=5*$argumento."</td>
                </tr>
                <tr>
                <td>6*$argumento = " .$resultado=6*$argumento."</td>
                </tr>
                <tr>
                <td>7*$argumento = " .$resultado=7*$argumento."</td>
                </tr>
                <tr>
                <td>8*$argumento = " .$resultado=8*$argumento."</td>
                </tr>
                <tr>
                <td>9*$argumento = " .$resultado=9*$argumento."</td>
                </tr>
                </table>";
            }

            //definicion
            multiplicar(4);
            ?>

</body>
</html>