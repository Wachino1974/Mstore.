<?php
class Instrumento
{
    var $marca;
    var $modelo;
    var $color;
    var $Tipoinstrumento;
    var $precio;

    function __construct($miMarca, $miModelo, $miColor, $miTinstrumento,$miPrecio)
    {
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->Tipoinstrumento = $miTinstrumento;
        $this->precio = $miPrecio;
    }
}
?>