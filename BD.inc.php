<?php
$dwes = new mysqli('localhost', 'dwes', 'abc123.', 'inmobiliaria');
$error = $dwes -> connect_errno;
if ($error) {
    echo "Error $error conectando a la base de datos: $dwes ->connect_error";
    exit();
}
echo "<h1>CONEXIÓN LOGRADA</h1>"
?>
