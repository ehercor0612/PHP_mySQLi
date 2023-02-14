<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lindavista</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <h1>Consulta de noticias</h1>
    <table>
        <tr>
            <td class="cabecera">Título</td>
            <td class="cabecera">Texto</td>
            <td class="cabecera">Categoría</td>
            <td class="cabecera">Fecha</td>
            <td class="cabecera">Imagen</td>
        </tr>

        <?php
        include "BD.inc.php";
        $resultado = $dwes->query('SELECT * FROM noticias');
        while ($fila = $resultado->fetch_array()) {
            echo ("<tr>");
            for($i=0;$i<5;$i++)
            {
                echo("<td>");
                echo($fila[$i]);
                echo("</td>");
            }
            echo ("</tr>");
        }
        ?>

    </table>
</body>

</html>