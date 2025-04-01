<?php
require __DIR__ . '/../conexion.php'; // Incluye la conexión a la base de datos el modelo se carga de mi bd llamada desde el index y carpeta css y lo renderiza 

class InstrumentoController
{
    private $conexion;

    function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    public function index()
    {
        $query = "SELECT * FROM instrumentos";
        $stmt = $this->conexion->query($query);
        $rowset = $stmt->fetchAll(PDO::FETCH_OBJ);
        require __DIR__ . '/../view/todosRegistros.php';
    }

    public function verRegistro($id)
    {
        $row = $this->obtenerInstrumentoPorId($id); // Usa el nuevo método
        if ($row) {
            require("app/view/unRegistro.php");
        } else {
            $this->index();
        }
    }

    public function agregar()
    {
        require __DIR__ . '/../view/agregar.php';
    }

    public function guardar($marca, $modelo, $color, $tinstrumento,$precio)
    {
        $query = "INSERT INTO instrumentos (marca, modelo, color, Tinstrumento,precio) VALUES (:marca,:modelo,:color,:Tinstrumento,:precio)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':Tinstrumento', $tinstrumento);
        $stmt->bindParam(':precio', $precio);
        $stmt->execute();

        header("Location: index.php");
        exit();
    }

    public function editarPrecio($id)
    {
        $row = $this->obtenerInstrumentoPorId($id); // Usa el nuevo método
        if ($row) {
            require __DIR__ . '/../view/editar.php';
        } else {
            $this->index();
        }
    }

    public function actualizarInstrumento($id, $marca, $modelo, $color, $Tinstrumento, $precio)
{
    $query = "UPDATE instrumentos 
              SET marca = :marca, 
                  modelo = :modelo, 
                  color = :color, 
                  Tinstrumento = :Tinstrumento, 
                  precio = :precio 
              WHERE id = :id";

    $stmt = $this->conexion->prepare($query);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':Tinstrumento', $Tinstrumento);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: index.php");
    exit();
}


    public function eliminar($id)
    {
        if (isset($_GET['confirmar'])) {
            // Si se confirma la eliminación
            $query = "DELETE FROM instrumentos WHERE id = :id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            header("Location: index.php");
            exit();
        } else {
            // Si no hay confirmación, obtiene el videojuego para mostrar la confirmación
            $row = $this->obtenerInstrumentoPorId($id);
            if ($row) {
                require("view/eliminar.php"); // Muestra la confirmación de eliminación
            } else {
                header("Location: index.php"); // Si no existe, redirige al catálogo
                exit();
            }
        }
    }

    public function obtenerInstrumentoPorId($id)
    {
        $query = "SELECT * FROM instrumentos WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ); // Retorna el videojuego o false si no existe
    }
}
?>