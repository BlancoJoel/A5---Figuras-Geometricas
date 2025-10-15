<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Figuras Geométricas</title>
    <!-- Bootstrap CDN para estilos modernos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fondo degradado lila para toda la página */
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4b2067 0%, #b993d6 100%);
        }
        /* Estilo para el título principal */
        .titulo-lila {
            background: linear-gradient(90deg, #6a3093 0%, #a044ff 100%);
            color: #fff;
            border-radius: 18px;
            padding: 18px 0;
            margin-bottom: 40px;
            box-shadow: 0 2px 12px rgba(75,32,103,0.15);
            text-shadow: 1px 1px 6px #4b2067;
        }
        /* Card visual para cada figura */
        .figura-card {
            transition: box-shadow 0.2s;
            cursor: pointer;
            border-radius: 20px;
            border: 2px solid #222;
            margin: 0 15px;
            width: 180px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }
        .figura-card:hover {
            box-shadow: 0 0 10px #a044ff;
            border-color: #a044ff;
        }
        /* Fila de cards centradas */
        .figura-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-top: 60px;
        }
        .figura-svg {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <!-- Título principal con fondo lila -->
        <h2 class="text-center titulo-lila">Elige una figura geométrica</h2>
        <!-- Cards de selección de figura, cada una lleva a la página de datos -->
        <div class="figura-row">
            <!-- Círculo -->
            <a href="datos_figura.php?tipoFigura=circulo" class="figura-card" title="Círculo">
                <svg class="figura-svg" viewBox="0 0 100 100">
                    <rect x="5" y="5" width="90" height="90" rx="20" fill="none" stroke="#222" stroke-width="3"/>
                    <circle cx="50" cy="50" r="30" fill="none" stroke="#222" stroke-width="3"/>
                </svg>
            </a>
            <!-- Triángulo -->
            <a href="datos_figura.php?tipoFigura=triangulo" class="figura-card" title="Triángulo">
                <svg class="figura-svg" viewBox="0 0 100 100">
                    <rect x="5" y="5" width="90" height="90" rx="20" fill="none" stroke="#222" stroke-width="3"/>
                    <polygon points="50,20 80,80 20,80" fill="none" stroke="#222" stroke-width="3"/>
                </svg>
            </a>
            <!-- Rectángulo -->
            <a href="datos_figura.php?tipoFigura=rectangulo" class="figura-card" title="Rectángulo">
                <svg class="figura-svg" viewBox="0 0 100 100">
                    <rect x="5" y="5" width="90" height="90" rx="20" fill="none" stroke="#222" stroke-width="3"/>
                    <rect x="20" y="35" width="60" height="30" fill="none" stroke="#222" stroke-width="3"/>
                </svg>
            </a>
            <!-- Cuadrado -->
            <a href="datos_figura.php?tipoFigura=cuadrado" class="figura-card" title="Cuadrado">
                <svg class="figura-svg" viewBox="0 0 100 100">
                    <rect x="5" y="5" width="90" height="90" rx="20" fill="none" stroke="#222" stroke-width="3"/>
                    <rect x="25" y="25" width="50" height="50" rx="10" fill="none" stroke="#222" stroke-width="3"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
