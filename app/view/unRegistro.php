<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Detalle del Instrumento</h1>
        <nav>
            <a href="index.php">Volver al Inventario </a>
        </nav>
    </header>

    <div class="container">
        <div class="videojuego">
            <h3><?php echo $row->nombre; ?></h3>
            <p><strong>Categoría:</strong> <?php echo $row->categoria; ?></p>
            <p><strong>Plataforma:</strong> <?php echo $row->plataforma; ?></p>
            <p><strong>Precio:</strong> $<?php echo $row->precio; ?></p>
            <a href="index.php?action=editarPrecio&id=<?php echo $id; ?>">Cambiar Precio</a>
            <a href="index.php?action=eliminar&id=<?php echo $id; ?>">Eliminar</a>
        </div>
    </div>
</body>
</html>