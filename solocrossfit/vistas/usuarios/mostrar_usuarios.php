<?php 

// Incluye el archivo de definición de la clase "Usuario"
require_once "../../modelos/usuarios.php";

// Crea una instancia de la clase "Usuario"
$usuario = new Usuario();

// Llama al método "mostrar_usuarios()" de la instancia de la clase "Usuario"
$usuario->mostrar_usuarios();
?>
