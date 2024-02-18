<?php 

// Se incluye el archivo que contiene la clase "DetallesUsuario"
require_once "../../modelos/eventos_competiciones.php";

// Se crea una instancia de la clase "DetallesUsuario"
$evento = new DetallesUsuario();

// Se llama al método "mostrar_detalles_usuarios" de la instancia creada anteriormente
$evento->mostrar_detalles_usuarios();

?>
