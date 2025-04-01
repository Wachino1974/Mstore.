<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar </title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/btn.css">
</head>
<body>
    <header>
        <h1>Eliminar Instrumento</h1>
    </header>

    <div class="container">
        <?php if (isset($row)): ?> <!-- Verifica si $row está definido -->
            <p>¿Eliminar el siguiente instrumento "<?php echo $row->Tinstrumento . " " . $row->marca; ?>"?</p>
            <a href="index.php?action=eliminar&id=<?php echo $id; ?>&confirmar=1" class="btn btn-eliminar">🗑️ Eliminar</a>
            <a href="index.php" class="btn btn-cancelar">❌ Cancelar</a>
        <?php else: ?>
            <p>El instrumento ya ha sido eliminado.</p>
            <a href="index.php" class="btn btn-cancelar">🔙 Volver al inventario</a>
        <?php endif; ?>
    </div>
</body>
</html>
