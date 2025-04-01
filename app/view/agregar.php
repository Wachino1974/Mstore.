<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Instrumento </title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Agregar Instrumento Al Inventario</h1>
    </header>

    <div class="container">
        <form action="index.php?action=guardar" method="post">
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br><br>

            <label for="Tinstrumento">Tipo de Instrumento:</label>
            <input type="text" id="Tinstrumento" name="Tinstrumento" required><br><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required><br><br>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>     