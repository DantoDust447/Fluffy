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
    <link rel="stylesheet" href="../styles/tables.css">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Ciudadanos</title>
</head>
<body>
    <a href="../index.php"><img src="../imgs/house.svg" alt="Inicio"></a>
</body>
</html>