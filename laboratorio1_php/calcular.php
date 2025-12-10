<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado - Laboratorio #1</title>
    <!-- Link to your new stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Resultados del Laboratorio #1</h1>

        <div class="resultado">
            <?php
            // PARTE 1: CÁLCULO DEL CÍRCULO
            if (isset($_POST['submit_circulo'])) {
                $radio = $_POST['radio'];
                if (is_numeric($radio) && $radio > 0) {
                    define("PI", 3.14159);
                    $area = PI * ($radio * $radio);
                    $perimetro = 2 * PI * $radio;
                    echo "<h2>Resultados para un círculo con radio de $radio:</h2>";
                    echo "<p>El área es: <strong>" . round($area, 2) . "</strong></p>";
                    echo "<p>El perímetro es: <strong>" . round($perimetro, 2) . "</strong></p>";
                } else {
                    echo "<p>Error: Por favor, ingrese un número positivo válido para el radio.</p>";
                }
            }

            // PARTE 2: CONVERSIÓN DE PULGADAS A CENTÍMETROS
            if (isset($_POST['submit_pulgadas'])) {
                $pulgadas = $_POST['pulgadas'];
                if (is_numeric($pulgadas)) {
                    $centimetros = $pulgadas * 2.54;
                    echo "<h2>Resultado de la Conversión:</h2>";
                    echo "<p>$pulgadas pulgadas equivalen a <strong>" . round($centimetros, 2) . "</strong> centímetros.</p>";
                } else {
                    echo "<p>Error: Por favor, ingrese un número válido para las pulgadas.</p>";
                }
            }
            ?>
        </div>

        <a href="index.html" class="volver-link">Volver a calcular</a>
    </div>

</body>

</html>