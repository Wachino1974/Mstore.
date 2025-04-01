<?php
// Habilitar visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Incluir el controlador y la conexión a la base de datos
require __DIR__ . '/../app/controller/InstrumentoController.php';

// Crear una instancia del controlador
$controller = new InstrumentoController;

// Obtener la acción y el ID de la URL
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

// Manejar la acción solicitada
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'verRegistro':
        $controller->verRegistro($id);
        break;
    case 'agregar':
        $controller->agregar();
        break;
    case 'guardar':
        $controller->guardar($_POST['marca'], $_POST['modelo'], $_POST['color'],$_POST['Tinstrumento'], $_POST['precio']);
        break;
    case 'editarPrecio':
        $controller->editarPrecio($id);
        break;
    case 'actualizarPrecio':
        $controller->actualizarInstrumento(
            $id, 
            $_POST['marca'], 
            $_POST['modelo'], 
            $_POST['color'], 
            $_POST['Tinstrumento'], 
            $_POST['precio']
        );
        
        break;
    case 'eliminar':
        if (isset($_GET['confirmar'])) {
            $controller->eliminar($id); // Elimina el instrumento
        } else {
            // Obtener el instrumento desde la base de datos
            $row = $controller->obtenerInstrumentoPorId($id); // Nuevo método en el controlador
            if ($row) {
                require __DIR__ . '/../app/view/eliminar.php';
                // Muestra la confirmación de eliminación
            } else {
                header("Location: index.php"); //  redirige al menu
                exit();
            }
        }
        break;
    default:
        $controller->index();
        break;
}
?>