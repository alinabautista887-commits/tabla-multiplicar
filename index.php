<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Tabla de multiplicar</h1>

    <div class="contenedor">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class='tabla'>";

            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "$i x $j = $resultado<br>";
            }

            echo "</div>";
        }
        ?>
    </div>

</body>
</html>