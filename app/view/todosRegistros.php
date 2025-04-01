<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bohimian Store</title>
    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            min-height: 250px; /* Ajustar altura mínima */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribuir espacio dentro de la tarjeta */
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        .card-body {
            flex-grow: 1;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🎵 Bohimian Store 🎵</a>
            <a href="index.php?action=agregar" class="btn btn-success">🎼 Agregar Nuevo Instrumento</a>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Inventario de Instrumentos</h2>

        <div class="row">
            <!-- Lista de instrumentos -->
            <?php if (!empty($rowset)): ?>
                <?php foreach ($rowset as $row): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo $row->marca; ?></h5>
                            <p class="card-text"><strong>Modelo:</strong> <?php echo $row->modelo; ?></p>
                            <p class="card-text"><strong>Color:</strong> <?php echo $row->color; ?></p>
                            <p class="card-text"><strong>Tipo:</strong> <?php echo $row->Tinstrumento; ?></p>
                            <p class="card-text"><strong>Precio:</strong> $<?php echo $row->Precio; ?></p>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="btn-group w-100">
                                <a href="index.php?action=editarPrecio&id=<?php echo $row->id; ?>" class="btn btn-warning w-50">✏️ Actualizar</a>
                                <a href="index.php?action=eliminar&id=<?php echo $row->id; ?>" class="btn btn-danger w-50">🗑️ Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No hay instrumentos en el inventario.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Agregar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
