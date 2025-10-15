<?php
session_start();

// Control de sesión: solo permite acceso si existe tipoFigura y el dato principal
if (
    !isset($_SESSION['tipoFigura']) ||
    (
        ($_SESSION['tipoFigura'] == 'cuadrado' && empty($_SESSION['lado1'])) ||
        ($_SESSION['tipoFigura'] == 'rectangulo' && (empty($_SESSION['lado1']) || empty($_SESSION['lado2']))) ||
        ($_SESSION['tipoFigura'] == 'triangulo' && (empty($_SESSION['lado1']) || empty($_SESSION['lado2']) || empty($_SESSION['lado3']))) ||
        ($_SESSION['tipoFigura'] == 'circulo' && empty($_SESSION['radio']))
    )
) {
    header('Location: index.php');
    exit();
}

require_once("Cuadrado.php");
require_once("Rectangulo.php");
require_once("Triangulo.php");
require_once("Circulo.php");

$tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($tipoFigura == "cuadrado") {
        $_SESSION['lado1'] = $_POST['lado1'];
    } elseif ($tipoFigura == "rectangulo") {
        $_SESSION['lado1'] = $_POST['lado1'];
        $_SESSION['lado2'] = $_POST['lado2'];
    } elseif ($tipoFigura == "triangulo") {
        $_SESSION['lado1'] = $_POST['lado1'];
        $_SESSION['lado2'] = $_POST['lado2'];
        $_SESSION['lado3'] = $_POST['lado3'];
    } elseif ($tipoFigura == "circulo") {
        $_SESSION['radio'] = $_POST['radio'];
    }
}

// Helper para formatear decimales
function formatNum($num) {
    return number_format($num, 2, '.', '');
}

// Título según figura
$titulo = '';
if ($tipoFigura == "cuadrado") $titulo = "Cuadrado";
elseif ($tipoFigura == "rectangulo") $titulo = "Rectángulo";
elseif ($tipoFigura == "triangulo") $titulo = "Triángulo";
elseif ($tipoFigura == "circulo") $titulo = "Círculo";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultados: <?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4b2067 0%, #b993d6 100%);
        }
        .titulo-lila {
            background: linear-gradient(90deg, #6a3093 0%, #a044ff 100%);
            color: #fff;
            border-radius: 18px;
            padding: 18px 0;
            margin-bottom: 40px;
            box-shadow: 0 2px 12px rgba(75,32,103,0.15);
            text-shadow: 1px 1px 6px #4b2067;
        }
        .card {
            border-radius: 16px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center titulo-lila">Resultados: <?php echo $titulo; ?></h2>
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <?php
                if ($tipoFigura == "cuadrado") {
                    $figura = new Cuadrado("Cuadrado", $_SESSION['lado1']);
                    echo "Has elegido el tipo de figura: Cuadrado<br>";
                    echo "El lado es: " . $_SESSION['lado1'] . "<br>";
                    echo "El área total del cuadrado es: " . formatNum($figura->calcularArea()) . "<br>";
                    echo "El perímetro total del cuadrado es: " . formatNum($figura->calcularPerimetro());
                } elseif ($tipoFigura == "rectangulo") {
                    $figura = new Rectangulo("Rectángulo", $_SESSION['lado1'], $_SESSION['lado2']);
                    echo "Has elegido el tipo de figura: Rectángulo<br>";
                    echo "El lado 1 es: " . $_SESSION['lado1'] . "<br>";
                    echo "El lado 2 es: " . $_SESSION['lado2'] . "<br>";
                    echo "El área total del rectángulo es: " . formatNum($figura->calcularArea()) . "<br>";
                    echo "El perímetro total del rectángulo es: " . formatNum($figura->calcularPerimetro());
                } elseif ($tipoFigura == "triangulo") {
                    $figura = new Triangulo("Triángulo", $_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
                    echo "Has elegido el tipo de figura: Triángulo<br>";
                    echo "El lado 1 es: " . $_SESSION['lado1'] . "<br>";
                    echo "El lado 2 es: " . $_SESSION['lado2'] . "<br>";
                    echo "El lado 3 es: " . $_SESSION['lado3'] . "<br>";
                    echo "El área total del triángulo es: " . formatNum($figura->calcularArea()) . "<br>";
                    echo "El perímetro total del triángulo es: " . formatNum($figura->calcularPerimetro());
                } elseif ($tipoFigura == "circulo") {
                    $figura = new Circulo("Círculo", $_SESSION['radio']);
                    echo "Has elegido el tipo de figura: Círculo<br>";
                    echo "El radio es: " . $_SESSION['radio'] . "<br>";
                    echo "El área total del círculo es: " . formatNum($figura->calcularArea()) . "<br>";
                    echo "El perímetro total del círculo es: " . formatNum($figura->calcularPerimetro());
                } else {
                    echo "<p class='text-danger'>No se ha seleccionado ninguna figura.</p>";
                }
                ?>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="datos_figura.php" class="btn btn-success me-2">Modificar datos</a>
            <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
