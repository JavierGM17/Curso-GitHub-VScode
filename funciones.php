<?php
/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva) {
    return $precio * (1 + $iva / 100);
}

/**
 * Devuelve un Saludo
 * @param String $nombre Nombre a saludar
 * @return String Saludo de Javier
 */
function JavierDiceHola(String $nombre)
    return "Hola soy Javier, como estas $nombre?";

}

?>