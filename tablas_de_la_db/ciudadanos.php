<?php
//comentario sin objetivo
require_once ("../procesos_crud/conexion.php");
$sql = "SELECT * FROM ciudadanos";
$ejecutar = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Ciudadanos</title>
</head>
<body>
    <header class="bg-primary text-white p-3">
        <div class="container">
            <h1>Ciudadanos</h1>
            <nav>
                <a href="../index.php"><button type="button" class="btn btn-secondary">Inicio</button></a>
            </nav>
        </div>
    </header>
    <nav>
        <button>Agregar ciudadano</button>
    </nav>
</body>
</html>