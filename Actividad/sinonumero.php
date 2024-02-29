<?php
// Obtener el número del formulario (supongamos que se envía como un parámetro llamado "numero")
$numero = $_POST['numero'];

// Verificar si el número tiene 3 dígitos
if (strlen($numero) === 3) {
    echo "El número $numero tiene 3 dígitos.";
} else {
    echo "El número $numero no tiene 3 dígitos.";
}
?>