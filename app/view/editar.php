<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/btn.css">
</head>
<body>
    <header>
        <h1>Actualizar Informacion</h1>
    </header>

    <div class="container">
        <form action="index.php?action=actualizarPrecio&id=<?php echo $id; ?>" method="post">
        <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br><br>

            <label for="Tinstrumento">Tipo de Instrumento:</label>
            <input type="text" id="Tinstrumento" name="Tinstrumento" required><br><br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?php echo $row->precio; ?>" required><br><br>

            <button type="submit" class="btn btn-editar">Actualizar🎸 </button>
        </form>
    </div>
</body>
</html>