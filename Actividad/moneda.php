<?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = $_POST["cantidad"];
            $moneda = $_POST["moneda"];

            echo "<p>Cantidad: $cantidad</p>";
            echo "<p>Moneda: $moneda</p>";

            switch ($moneda) {
                case "USD":
                    $imagen = "img/usd.png";
                    break;
                case "EUR":
                    $imagen = "img/eur.png";
                    break;
                case "JPY":
                    $imagen = "img/jpy.png";
                    break;
                case "GBP":
                    $imagen = "img/gbp.png";
                    break;
                case "CHF":
                    $imagen = "img/chf.png";
                    break;
                default:
                    echo '<div class="alert alert-danger" role="alert">Moneda no válida.</div>';
                    exit;
            }

            for ($i = 0; $i < $cantidad; $i++) {
                echo "<img src=\"$imagen\" alt=\"$moneda\">";
            }
        }
        ?>
