<?php
session_start();

// Control de sesión: solo permite acceso si existe tipoFigura
if (!isset($_SESSION['tipoFigura']) || empty($_SESSION['tipoFigura'])) {
    header('Location: index.php');
    exit();
}

// Recoge tipoFigura desde GET si existe (por las cards)
if (isset($_GET['tipoFigura'])) {
    $_SESSION['tipoFigura'] = $_GET['tipoFigura'];
}

// Recoge tipoFigura desde POST si existe (por el formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipoFigura'])) {
    $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
}

$tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';

$lado1 = isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '';
$lado2 = isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '';
$lado3 = isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '';
$radio = isset($_SESSION['radio']) ? $_SESSION['radio'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Introduce los datos de la figura</title>
    <!-- Bootstrap CDN -->
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
    </style>
    <script src="ValidacionJs.js"></script>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center titulo-lila">Introduce los datos para: <?php echo ucfirst($tipoFigura); ?></h2>
        <div class="card shadow mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form action="resultados.php" method="post">
                    <?php if ($tipoFigura == "cuadrado"): ?>
                        <div class="mb-3">
                            <label for="lado1" class="form-label">Lado:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control" value="<?php echo $lado1; ?>" required step="0.01" min="0.01">
                        </div>
                    <?php elseif ($tipoFigura == "rectangulo"): ?>
                        <div class="mb-3">
                            <label for="lado1" class="form-label">Lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control" value="<?php echo $lado1; ?>" required step="0.01" min="0.01">
                        </div>
                        <div class="mb-3">
                            <label for="lado2" class="form-label">Lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control" value="<?php echo $lado2; ?>" required step="0.01" min="0.01">
                        </div>
                    <?php elseif ($tipoFigura == "triangulo"): ?>
                        <div class="mb-3">
                            <label for="lado1" class="form-label">Lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control" value="<?php echo $lado1; ?>" required step="0.01" min="0.01">
                        </div>
                        <div class="mb-3">
                            <label for="lado2" class="form-label">Lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control" value="<?php echo $lado2; ?>" required step="0.01" min="0.01">
                        </div>
                        <div class="mb-3">
                            <label for="lado3" class="form-label">Lado 3:</label>
                            <input type="number" name="lado3" id="lado3" class="form-control" value="<?php echo $lado3; ?>" required step="0.01" min="0.01">
                        </div>
                    <?php elseif ($tipoFigura == "circulo"): ?>
                        <div class="mb-3">
                            <label for="radio" class="form-label">Radio:</label>
                            <input type="number" name="radio" id="radio" class="form-control" value="<?php echo $radio; ?>" required step="0.01" min="0.01">
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-success w-100">Calcular</button>
                </form>
                <br>
                <a href="index.php" class="btn btn-secondary w-100">Volver</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
