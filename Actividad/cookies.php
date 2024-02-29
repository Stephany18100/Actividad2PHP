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
        <h2>Establecer Cookie</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Ingrese su nombre de usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];

            setcookie("username", $username, 0); 
        }
        if (isset($_COOKIE["username"])) {
            $username = $_COOKIE["username"];
            echo "<p>Hola $username</p>";
        }
        ?>
    </div>
</body>
</html>