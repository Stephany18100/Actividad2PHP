        <?php
        if (isset($_GET['dato'])) {
            $dato = $_GET['dato'];
            echo "El dato ingresado es: " . htmlspecialchars($dato);
        } else {
            echo "No se ha proporcionado ningún dato.";
        }
        ?>